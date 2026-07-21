<?php


class Router 
{
    protected array $routes=[]; 

    public function get($uri, $controller){
        $this->routes['get'][$this->normalize($uri)]=$controller;
    }

    public function post($uri, $controller)
{
    $this->routes['post'][$this->normalize($uri)] = $controller;
}

    protected function normalize($uri){
        return '/'.trim($uri, '/');
    }


    public function route($uri, $method){
        $uri= $this->normalize(parse_url($uri, PHP_URL_PATH));
        $method=strtolower($method);

        foreach($this->routes[$method] ?? [] as $route => $controller){
            if($route === $uri){
                return require base_path($controller);
            }

        }
        echo "404 - not found";
    }

}
