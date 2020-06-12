<?php

  class Professor{
    private $nome;
    private $idade;
    private $matricula;
    private $salario;

    public function nome()
    {
        echo "O nome é " , get_class($this) , "\n";
    }

  

    public function getNome() {
    return $this->nome;
    }
  
    public function setNome($nome) {
    $this->nome= $nome;
    }
  
    public function getIdade() {
      return $this->idade;
    }
    
    public function setIdade($idade) {
      $this->idade= $idade;
    }

    public   function getMatricula() {
      return $this->matricula;
    }
    
    public function setMatricula($matricula) {
      $this->matricula= $matricula;
    }
    
    public function getSalario() {
      return $this->salario;
    }

    public function __construct($nome,$idade,$matricula,$salario){
      $this->nome = $nome;
      $this->idade = $idade;
      $this->matricula = $matricula;
      $this->salario = $salario;
    }

  } 


  class ProfessorHorista extends Professor{
    private $horastrabalhadas;
    private $valorhoraaula;

    public function __construct($nome, $idade,$matricula,$valorhoraaula,$horastrabalhadas){
      Professor::setNome($nome);
      Professor::setIdade($idade);
      Professor::setMatricula($matricula);

      $this->horastrabalhadas = $horastrabalhadas;
      $this->valorhoraaula = $valorhoraaula;
    }


    public function calcularSalario($horastrabalhadas,$valorhoraaula){
      return $this->$horastrabalhadas*$this->valorhoraaula*4; 
      
    }

    public function nome() {
        echo "O nome é " , get_class($this) , "\n";
    }

    public function getHorastrabalhadas() {
        return $this->$horastrabalhadas;
      }
      
    public function setHorastrabalhada($horastrabalhadas) {
        $this->horastrabalhadas= $horastrabalhadas;
      }

    
    public function getValorHoraAula() {
        return $this->$valorhoraaula;
      }
      
    public function setValorHoraAula($valorhoraaula) {
        $this->valorhoraaula= $valorhoraaula;
      }
  }


  class ProfessorFixo extends Professor{
    private $salariofixo;

    public function __construct($nome, $idade,$matricula,$salariofixo){
      Professor::setNome($nome);
      Professor::setIdade($idade);
      Professor::setMatricula($matricula);

      $this->salariofixo = $salariofixo;
      
    }

    public function nome() {
      echo "O nome é " , get_class($this) , "\n";
    }




    public function getSalariofixo() {
    return $this->$salariofixo;
    }
  
    public function setSalariofixo($salariofixo) {
    $this->salariofixo= $salariofixo;
    }

    }


    for ($i = 5; $i <= 15; $i++) {
    echo $i;
     }

    class Usuario {
    private $login;
    private $senha;

    public function __construct($login, $senha){
      $this->login = $login;
      $this->senha = $senha;
    }

    public function validarSenha($senha){
    
    if($senha == 123){
      echo "A Senha está correta!";
    }else{
      
      echo "A senha é inválida!";
  
      
    }
  }


  public function getLogin() {
    return $this->login;
    }

  public function setLogin($login) {
    $this->login= $login;
  }
  
  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($senha) {
    $this->senha= $senha;
  }

    
  }


  $professor = new Professor("João",30,123456,1.200); 
  echo "O nome da classe é: " , get_class($professor) , "\n";
  //var_dump( $professor);
  $professorfixo = new ProfessorFixo("João",30,1234567,1.200); 
  echo "O nome da classe é: " , get_class($professorfixo) , "\n";
  //var_dump( $professorfixo);
  $professorhorista = new ProfessorHorista("João",30,1234567,100.00,8); 
  echo "O nome da classe é: " , get_class($professorhorista) , "\n";
  //var_dump( $professorhorista);
  //echo $professorhorista->calcularSalario();


 $ob1 = new Usuario("Fred",123);
 $ob1->validarSenha(123);
 $ob1->validarSenha(122);
 
?>