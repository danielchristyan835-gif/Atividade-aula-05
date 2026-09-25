<?php

$resposta = (string) readline("É Mamífero? (sim/nao): \n");
if ($resposta === "sim"){
    $resposta = (string) readline("É Quadrúpede? (sim/nao): \n");
    if ($resposta === "sim") {
        $resposta = (string) readline("É Carnívoro? (sim/nao): \n");
        if ($resposta === "sim") {
            echo "Então o animal escolhido foi Leão.";            
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É Herbívoro? (sim/nao): \n");
            if ($resposta === "sim"){
                echo "Então o animal escolhido foi Cavalo.\n";
            } else {
                echo "Animal não encontrado.\n";
            }
        }
    } elseif ($resposta === "nao") {
        $resposta = (string) readline("É Bípede? (sim/nao): \n");
        if ($resposta === "sim") {
            $resposta = (string) readline("É Onívoro? (sim/nao): \n");
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi Homem.\n";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É Frugívoro? (sim/nao): \n");
                if ($resposta === "sim"){
                    echo "Então o animal escolhido foi Macaco.\n";
                } else {
                    echo "Animal não encontrado.\n";
                }
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É Voador? (sim/nao): \n");
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi Morcego.\n";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É Aquático? (sim/nao): \n");
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi Baleia.\n";
                } else {
                    echo "Animal não encontrado.\n";
                }
            }
        }
    }
} elseif ($resposta === "nao") {
    $resposta = (string) readline("É Ave? (sim/nao): \n");
    if ($resposta === "sim") {
        $resposta = (string) readline("É não Voadora? (sim/nao): \n");
        if ($resposta === "sim") {
            $resposta = (string) readline("É Tropical? (sim/nao): \n");
            if ($resposta === "sim"){
                echo "Então o animal escolhido foi Avestruz.\n";          
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É Polar? (sim/nao): \n");
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi Pinguim.\n";
                } else {
                    echo "Animal não encontrado.\n";
                }
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É Nadadora? (sim/nao): \n");
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi Pato.\n";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É de Rapina? (sim/nao): \n");
                if ($resposta === "sim"){
                    echo "Então o animal escolhido foi Águia.\n";
                } else {
                    echo "Animal não encontrado.\n";
                }
            }
        }
    } elseif ($resposta === "nao") {
        $resposta = (string) readline("É Réptil? (sim/nao): \n");
        if ($resposta === "sim") {
            $resposta = (string) readline("É com Casco? (sim/nao): \n");
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi Tartaruga.\n";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É Carnívoro? (sim/nao): \n");
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi Crocodilo.\n";
                } elseif ($resposta === "nao") {
                    $resposta = (string) readline("É sem Patas? (sim/nao): \n");
                    if ($resposta === "sim"){
                        echo "Então o animal escolhido foi Cobra.\n";
                    } else {
                        echo "Animal não encontrado.\n";
                    }
                }
            }
        } else {
            echo "Animal não encontrado.";
        }
    }

}