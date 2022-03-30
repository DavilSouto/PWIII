<?php   
    class Usuario{
        private $usuario;
        private $senha;
        private $nome;
        private $tipoUsuario;

        //Gets e sets
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTipoUsuario($tipoUsuario){
            $this->tipoUsuario = $tipoUsuario;
        }

        public function getTipoUsuario(){
            return $this->tipoUsuario;
        }

        //Demais métodos
        public function validarAcesso($usuario, $senha){
            $user = ("admin");

            $senhaMd5 = md5("123456");

            $senhaCrypt = crypt($senhaMd5,"etec");

            if(isset($_POST["btnLogin"])){

                $senhaUser = crypt(md5($_POST["pass"]),"etec");

                if($_POST["username"] == $user && $senhaUser == $senhaCrypt){
                    
                    echo "<p style='font-family: arial; color: green; font-size: 40px'>Usuário Logado!</p>";
                }else{

                    echo "<p style='font-family: arial; color: red; font-size: 40px'>Usuário e/ou senha incorretos</p>";
                }
            }
        }
    }
?>