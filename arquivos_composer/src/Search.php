<?php

namespace windows\arquivos_composer;

// nome da classe obrigatoriamente precisar ser o mesmo do arquivo
// criação de uma API
class Search { 
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/in', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}
