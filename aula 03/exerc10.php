    <?php

    while (true) {
        $opcao = readline(
            "\n--- Menu Interativo ---\n" .
            "1. Olá\n" .
            "2. Data atual\n" .
            "3. Sair\n" .
            "Escolha uma opção: "
        );

        switch ($opcao) {
            case 1:
                echo "Olá Henrique\n";
                break;

            case 2:
                echo "Data atual: " . date("d/m/Y H:i:s") . "\n";
                break;

            case 3:
                echo "Saindo...\n";
                break 2; // <- Sai do switch E do while, encerrando o programa

            default:
                echo "Opção inválida. Tente novamente.\n";
                break;
        }
    }
    ?>
