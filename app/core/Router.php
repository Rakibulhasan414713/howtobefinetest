<?php
class Router {
    private array $get = [];
    private array $post = [];

    public function get(string $path, callable $handler): void { $this->get[$path] = $handler; }
    public function post(string $path, callable $handler): void { $this->post[$path] = $handler; }

    public function dispatch(): void {
        $method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $base = parse_url(BASE_URL, PHP_URL_PATH) ?: '';
        if ($base !== '' && str_starts_with($uri, $base)) {
            $uri = substr($uri, strlen($base));
        }
        $uri = '/' . trim($uri, '/');
        if ($uri === '//') $uri = '/';


        if (str_ends_with($uri, '.php')) $uri = substr($uri, 0, -4);
        if ($uri === '') $uri = '/';

        $map = ($method === 'POST') ? $this->post : $this->get;


        if (isset($map[$uri])) { $map[$uri](); return; }


        $page = ltrim($uri, '/');
        if ($page === '') $page = 'index';


        $deny = ['login','userlogincheck','updateText'];
        if (in_array($page, $deny, true)) {
            http_response_code(405);
            echo "Method Not Allowed";
            return;
        }


        $candidate = APP_ROOT . '/views/pages/' . $page . '.php';
        if (file_exists($candidate)) {
            (new PagesController())->show($page . '.php');
            return;
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
