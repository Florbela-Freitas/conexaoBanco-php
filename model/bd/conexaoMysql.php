<?php
    /**********************************************************************
     * Objetivo: Arquivo para criar a conexão com o banco de dados Mysql.
     * Autora: Florbela
     * Data: 25/02/2022
     * Versão: 1.0
     **********************************************************************/

    //Constantes para estabelecer a conexão com o banco de dados (local do BD, usuário, senha e database)
    const SERVER = 'localhost';
    const USER = 'root';
    const PASSWORD = 'bcd127';
    const DATABASE = 'dbcontatos';

    //Abre a conexão com o banco de dados Mysql
    function conexaoMysql() {
        $conexao = array();

        //Se a conexão for estabelecida com o BD, iremos ter um array de dados sobre a conexão
        $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

        //Validação para verificar se a conexão foi realizada com sucesso
        if($conexao)
            return $conexao;
        else
            return false;
    }

    //Fecha a conexão com o BD mySQL
    function fecharConexaoMysql($conexao) {
        mysqli_close($conexao);
    }

    /*
        Existem 3 formas de criar a conexão com o BD Mysql:
        * mysql_connect() - versão antiga do PHP de fazer a conexão com BD
            (Não oferece performance e segurança);
        * mysqli_connect() - versão mais atualizada do PHP de fazer a conexão com o BD
            (Permite ser utilizada para programação estruturada e POO);
        * PDO() - versão mais completa e eficiente para conexão com BD
            (Indicada pela segurança e POO)
        OBS:. Específico para PHP
    */
?>