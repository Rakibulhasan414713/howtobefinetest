<?php
class Controller {
    protected function view(string $viewFile, array $data = []): void {
        extract($data, EXTR_SKIP);
        $path = APP_ROOT . '/views/' . ltrim($viewFile, '/');
        if (!file_exists($path)) {
            http_response_code(404);
            echo "View not found: " . htmlspecialchars($viewFile);
            return;
        }
        require $path;
    }

    protected function redirect(string $path): void {

        $trimmed = ltrim($path, "/");
        $isHttp  = (substr($trimmed, 0, 7) === "http://");
        $isHttps = (substr($trimmed, 0, 8) === "https://");

        if ($isHttp || $isHttps) {
            header("Location: " . $trimmed);
        } else {
            header("Location: " . BASE_URL . "/" . $trimmed);
        }
        exit;
    }
}
