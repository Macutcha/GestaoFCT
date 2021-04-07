<?php
// namespace core\class;
namespace core\class;

use Exception;
use PDO;
use PDOException;

class Database
{
    private $ligacao;
    // =====================================================
    // Funcao que o banco de dados
    private function ligar() {
        $this -> ligacao = new PDO(
        'mysql:'.
        'host='.MYSQL_SERVER.';'.
        'dbname='.MYSQL_DATABASES.';'.
        'charset='.MYSQL_CHARSET,
        MYSQL_USER,
        MYSQL_PASS,
        array(PDO::ATTR_PERSISTENT => true)
        );

        // Debug
        $this -> ligacao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    // =====================================================
    // funcao que deslida o banco de dados
    private function desligar() {
        $this ->  ligacao = null;
    }

    // =====================================================
    // CRUD
    // =====================================================
    public function select($sql, $parametros = null) {
        $sql = trim($sql);
        if (!preg_match("/^SELECT/i", $sql)) {
            throw new Exception("BASE DA DADOS NAO E UMA INTRUCAO SELECT");        
        }

        $this -> ligar();
        $resultado = null;
        try {
            if(!empty($parametros)) {
                $executar = $this -> ligacao -> prepare($sql);
                $executar -> execute($parametros);
                $resultado = $executar -> fetchAll(PDO::FETCH_CLASS);
            } else {
                $executar = $this ->ligacao -> prepare($sql);
                $executar -> execute();
                $resultado = $executar -> fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $e) {
            return false;
        }
        $this -> desligar();
        return $resultado;
    }

    // =====================================================
    public function insert( $sql, $parametros = null ) {
        $sql = trim($sql);

        // VErifica se e uma instrucao INSERT
        if (!preg_match( "/^INSERT/i",$sql )) {
            throw new Exception("BASE DE DADOS NAO EH UMA INSTRUCAO INSERT");
        }

        // Liga
        $this-> ligar();
        // Comunica
        try {
            if (!empty( $parametros )) {
          
        
                $executar = $this -> ligacao -> prepare( $sql );
                $executar -> execute( $parametros );
    
                } else {
    
                    $executar = $this -> ligacao -> prepare( $sql );
                    $executar -> execute();
                }
        } catch ( PDOException $e) {
            return false;
        }

        // Desliga
        $this->desligar();
    }
    
    // =====================================================
    public function update( $sql, $parametros = null ) {
        $sql = trim($sql);
        
        // VErifica se e uma instrucao UPDATE
        if (!preg_match( "/^UPDATE/i",$sql )) {
            throw new Exception("BASE DE DADOS NAO EH UMA INSTRUCAO UPDATE");
        }

        // Liga
        $this-> ligar();
        // Comunica
        try {
            if (!empty( $parametros )) {
          
        
                $executar = $this -> ligacao -> prepare( $sql );
                $executar -> execute( $parametros );
    
                } else {
    
                    $executar = $this -> ligacao -> prepare( $sql );
                    $executar -> execute();
                }
        } catch ( PDOException $e) {
            return false;
        }

        // Desliga
        $this->desligar();
    }
    
    // =====================================================
    public function delete( $sql, $parametros = null ) {
        $sql = trim($sql);
        // VErifica se e uma instrucao DELETE
        if (!preg_match( "/^DELETE/i",$sql )) {
            throw new Exception("BASE DE DADOS NAO EH UMA INSTRUCAO DELETE");
        }

        // Liga
        $this-> ligar();
        // Comunica
        try {
            if (!empty( $parametros )) {
          
        
                $executar = $this -> ligacao -> prepare( $sql );
                $executar -> execute( $parametros );
    
                } else {
    
                    $executar = $this -> ligacao -> prepare( $sql );
                    $executar -> execute();
                }
        } catch ( PDOException $e) {
            return false;
        }

        // Desliga
        $this->desligar();
    }
    
    // =====================================================
    //INSTRUCAO GENERICA
    public function statment( $sql, $parametros = null ) {
        $sql = trim($sql);
        
        // VErifica se e uma instrucao STATMENT
        if (preg_match( "/^(INSERT | DELETE | UPDATE | SELECT )/i",$sql )) {
            throw new Exception("BASE DE DADOS INVALIDO");
        }

        // Liga
        $this-> ligar();
        // Comunica
        try {
            if (!empty( $parametros )) {
          
        
                $executar = $this -> ligacao -> prepare( $sql );
                $executar -> execute( $parametros );
    
                } else {
    
                    $executar = $this -> ligacao -> prepare( $sql );
                    $executar -> execute();
                }
        } catch ( PDOException $e) {
            return false;
        }

        // Desliga
        $this->desligar();
    }

}