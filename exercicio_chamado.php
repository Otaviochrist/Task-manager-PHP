<?php

class chamados 
{
    private int $id;
    private string $equipamento;
    private string $defeito;

    public function __construct(int $id, string $equipamento, string 
    $defeito) {
        $this-> id = $id;
        $this-> equipamento = $equipamento;
        $this-> defeito = $defeito;
    }
    public function exibir(): string {
        return "chamado nº: {$this->id}  este {$this->equipamento} está com: {$this->defeito}";
    }
    public function getId(): int {
        return $this->id;
    }
    public function getEquipamento(): string {
        return $this->equipamento;
    }
    public function getDefeito(): string {
        return $this->defeito;
    }
    public function SetDefeito(string $defeito): void {
        $this->defeito = $defeito;
    }
}
class ChamadosRepository {
    private array $chamados = [];

    public function adicionar (chamados $chamado): void {
        $this->chamados[] = $chamado;
    }

    public function buscarPorId(int $id): ?Chamados {
        foreach($this->chamados as $chamado) {
            if($chamado->getid() === $id){
                return $chamado;
            }
        }
        return null;

    }
    public function listarTodos(): array {
        return $this->chamados;
    }

}

class ChamadosService {
    private ChamadosRepository $repo;

    public function __construct(ChamadosRepository $repo) {
        $this->repo = $repo;
    }

    public function exibirTodos(): void {
        foreach ($this->repo->listarTodos() as $chamado) {
            echo $chamado->exibir() . "\n";
        }
    }
}


$chamado1 = new chamados(123, "Notebook Dell", "o teclado não funcionando\n");
$chamado1->setDefeito("Tela quebrada\n");

$id = $chamado1->getId(); 
$equipamento = $chamado1->getEquipamento(); 
$defeito = $chamado1->getDefeito();

$chamado2 = new chamados(1123, "Notebook Vostro", "não está ligando\n");

$id = $chamado2->getId(); 
$equipamento = $chamado2->getEquipamento(); 
$defeito = $chamado2->getDefeito();


$chamado3 = new chamados(163, "Celular", "Camera quebrada\n");
$id = $chamado3->getId(); 
$equipamento = $chamado3->getEquipamento(); 
$defeito = $chamado3->getDefeito();

$repo = new ChamadosRepository();

$repo->adicionar($chamado1);
$repo->adicionar($chamado2);
$repo->adicionar($chamado3);

$encontrado = $repo->buscarPorId(1123);
echo $encontrado->exibir(); 
$service = new ChamadosService($repo);
$service->exibirTodos();  