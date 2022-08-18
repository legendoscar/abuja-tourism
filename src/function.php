<?php
require_once __DIR__ . '/index.php';

function __()
{
    if (!isset($_SESSION['flash'])) {
        return;
    }
    $_SESSION['alertMessage'] = $_SESSION['flash'];
    print_r($_SESSION['alertMessage']->message);
    unset($_SESSION['flash']);
}
__();

function request(string $url, string $method = 'get', array $options = [], array $headers = [])
{
    $url = constant('BASE_URL') . '/' . $url;
    switch ($method) {
        case 'post':
            $request = Requests::post($url, $headers, $options);
            break;
        case 'put':
            $request = Requests::put($url, $headers, $options);
            break;
        case 'delete':
            $request = Requests::delete($url, $headers, $options);
            break;
        default:
            $request = Requests::get($url, $headers, $options);
            break;
    }
    return json_decode($request->body);
}

function signIn(string $identifier, string $password)
{
    $response = request('auth/sign-in', 'post', ['user' => $identifier, 'password' => $password]);
    $_SESSION['flash'] = $response;
    if ($response->status) {
        header('Location: /');
        return;
    }
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

function signUp(string $firstname, string $lastname, string $email, string $phone, string $password, string $confirm_password)
{
    $response = request('auth/sign-up', 'post', compact('firstname', 'lastname', 'email', 'phone', 'password', 'confirm_password'));
    $_SESSION['flash'] = $response;
    if ($response->status) {
        header('Location: /sign-in.php');
        return;
    }
    header('Location: ' . $_SERVER['REQUEST_URI']);

}
