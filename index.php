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
} 


class ProfessorHorista extends Professor{
    private $horastrabalhadas;
    private $valorhoraaula;


    public function calcularSalario($horastrabalhadas,$valorhoraaula){
      return $horastrabalhadas * $valorhoraaula;
      
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
      // Caso a condição seja falsa, este bloco vai ser executado!
      echo "A senha é inválida!";
  
      echo $senha;
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


  $professor = new Professor;
  echo "O nome da classe é: " , get_class($professor) , "\n";
  //var_dump( $professor);
  $professorfixo = new ProfessorFixo;
  echo "O nome da classe é: " , get_class($professorfixo) , "\n";
  //var_dump( $professorfixo);
  $professorhorista = new ProfessorHorista;
  echo "O nome da classe é: " , get_class($professorhorista) , "\n";
  //var_dump( $professorhorista);


 $ob1 = new Usuario("Fred",123);
 $ob1->validarSenha(123);

 echo $ob1->getSenha();

?>