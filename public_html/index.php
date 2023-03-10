<?php

use Projektas\Authenticator;
use Projektas\Controllers\AdminController;
use Projektas\Controllers\PradziaController;
use Projektas\Exceptions\MissingVariableException;
use Projektas\Exceptions\UnauthenticatedException;
use Projektas\FS;
use Projektas\Output;
use Projektas\Router;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Projektas\HtmlRender;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/../vendor/larapack/dd/src/helper.php";

$log = new Logger('Portfolios');
$log->pushHandler(new StreamHandler('../logs/klaidos.log', Logger::WARNING));

$output = new Output();

try {
    session_start();

//    // Autentifikuojam vartotoja, tikrinam jo prisijungimo busena
//    $authenticator = new Authenticator();
//    $authenticator->authenticate($_POST['username'] ?? null, $_POST['password'] ?? null);

    $router = new Router();
    $router->addRoute('GET', '', [new PradziaController(), 'index']);
    $router->addRoute('GET', 'admin', [new AdminController(), 'index']);
    $router->run();

} catch (\Appsas\Exceptions\PageNotFoundException $e) {
    $output->store('Neradau puslapio');
    $log->warning($e->getMessage());
} catch (UnauthenticatedException $e) {
    $output->store('Neteisingi prisijungimo duomenys');
    $log->warning($e->getMessage());
} catch (MissingVariableException $e) {
    $output->store('Kilo klaida templeite.');
    $log->warning($e->getMessage());
} catch (Exception $e) {
    $output->store('Oi nutiko klaida! Bandyk vėliau dar karta.');
    $log->error($e->getMessage());
}

// Spausdinam viska kas buvo 'Storinta' Output klaseje
$output->print();