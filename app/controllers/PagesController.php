<?php
class PagesController extends Controller {
    public function show(string $file): void {
        $this->view('pages/' . $file);
    }
}
