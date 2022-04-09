<?php 
class Funcionario
{
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private  $salarioFinal;

    //Gets e Sets

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    public function getSalHora()
    {
        return $this->salHora;
    }

    public function setSalHora($salHora)
    {
        $this->salHora = $salHora;
    }

    public function getHorasTrab()
    {
        return $this->horasTrab;
    }

    public function setHorasTrab($horasTrab)
    {
        $this->horasTrab = $horasTrab;
    }

    public function getSalarioFinal()
    {
        return $this->salarioFinal;
    }

    public function setSalarioFinal($salarioFinal)
    {
        $this->salarioFinal = $salarioFinal;
    }

    //Demais metódos

    public function calcularSalario()
    {
        return $this->horasTrab * $this->salHora * 30;
    }

    public function mostrarDados()
    {
        return "Nome: $this->nome <br> Cidade: $this->cidade <br> Salário p/Hora:  $this->salHora <br> Horas trabalhadas:  $this->horasTrab <br> Salário: R$ $this->salarioFinal";
    }

    public function darAumento($aumento)
    {
        return $this->salarioFinal = $this->salarioFinal + $aumento;
    }    
}

?>