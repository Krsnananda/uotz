<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagasSeeder extends Seeder
{
	/**
	 * Run the database seeds.
		*
		* @return void
		*/
	public function run()
  {
    DB::table('vagas')->insert([
      'nome_vaga' => 'Assistente de Comunicação',
      'pais' => 'Brasil',
      'cidade' => 'São Paulo',
      'estado' => 'SP',
      'departamento' => 'Marketing',
      'tipo' => 'Estágio',
      'descricao' => 'O Assistente de Comunicação é o profissional responsável por prestar auxílio na atualização de materiais comerciais, site, 
      vídeo institucional e demais materiais publicitários da empresa para apoio às ações comerciais. Auxilia o gerente no acompanhamento do desempenho 
      de vendas e fornecedores, presta suporte no contato com agência de propaganda, faz o controle de notas fiscais, apoio em negociações, 
      implementação de campanhas publicitárias e de vendas. Elabora parceria com o gerente de marketing em campanhas e promoções.',
      'remoto' => '1',
      'created_at' => '2020-10-12',
      'autor_id' => '1',
    ]);
    DB::table('vagas')->insert([
      'nome_vaga' => 'Assistente de Projetos - Avaliação da Jornada Digital',
      'pais' => 'Brasil',
      'cidade' => 'Rio de Janeiro',
      'estado' => 'RJ',
      'departamento' => 'Operações',
      'tipo' => 'Período Integral',
      'descricao' => 'Auxilia nos processos de desenvolvimento de projetos, levanta necessidades e requisitos, acompanha
        cronograma, desenvolve planilhas e apresentações e controla documentações. O que o Assistente de Processos faz?
        Realiza diagnósticos para mapeamento de fluxograma, estruturação e descrição detalhada do processo. Elabora e 
        divulga o procedimento relativo ao processo desenvolvido, identificando a oportunidade de melhoria e otimização do
          processo e da prática existente.',
      'remoto' => '0',
      'created_at' => '2020-10-09',
      'autor_id' => '1',
    ]);
    DB::table('vagas')->insert([
      'nome_vaga' => 'Assistente de Projetos - Inteligência Competitiva',
      'pais' => 'Brasil',
      'cidade' => 'São Paulo',
      'estado' => 'SP',
      'departamento' => 'Marketing',
      'tipo' => 'Período Integral',
      'descricao' => 'Coleta, consolida e analisa informações sobre mercado e concorrentes, avalia o desempenho
        da empresa nos negócios, acompanha a elaboração do planejamento de marketing e reporta dados à equipe de
        vendas para desenvolvimento de ações estratégicas. Diante disso, num ambiente corporativo, o profissional 
        de Inteligência Competitiva é o responsável por auxiliar os gestores da empresa com informações, análises 
        e recomendações consistentes para a tomada de decisões.',
      'remoto' => '0',
      'created_at' => '2020-10-09',
      'autor_id' => '1',
    ]);
    DB::table('vagas')->insert([
      'nome_vaga' => 'Software Engineer',
      'pais' => 'Brasil',
      'cidade' => 'São Paulo',
      'estado' => 'SP',
      'departamento' => 'Tecnologia',
      'tipo' => 'Período Integral',
      'descricao' => 'Responsabilidades do Software Engineer:
      Desenvolver (micro-) serviços independentes para soluções específicas;
      Contribua não apenas com os desafios imediatos de sua equipe, mas com toda a equipe de produto -
      compartilhando inputs / código / etc;
      Melhorar a experiência de desenvolvimento na UOTZ aprimorando as ferramentas, cobertura de teste
      e / ou estrutura de código;
      Participar ativamente de discussões e decisões de design de software. Contruindo e ajudando a criar
      documentações;
      Criar soluções escaláveis, de fácil manutenção e direcionadas ao usuário. Usamos várias tecnologias
      diferentes: PHP sobre banco de dados SQL, MongoDB e Firebase. Também temos microserviços
      escritos em Node e PHP, além de aplicativos com Android. Você não precisa saber tudo isso de antemão,
      mas daremos a você espaço para aprender e melhorar;',
      'remoto' => '1',
      'created_at' => '2020-10-05',
      'autor_id' => '1',
    ]);
  }
}
