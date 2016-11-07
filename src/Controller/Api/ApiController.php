<?php

namespace ForumPHPMA\Controller\Api;

use Silex\Application;

class ApiController 
{
	private $app;

	public function __construct(Application $app)
	{
		header('Access-Control-Allow-Origin: *');
		$this->app = $app;
	}

	public function speakers()
	{
		return $this->app->json($this->getSpakers(), 200);
	}

	public function speaker($slug)
	{
		$speaker = array_filter($this->getSpakers(), function($sp) use ($slug){
			return $sp['slug'] == $slug;
		});

		if(!$speaker) return $this->app->json(['Nenhum palestrantes encontrado!'], 404);

	    return $this->app->json(array_values($speaker)[0]);
	}

	private function getSpakers()
	{
		$speakerName = array(
             0 => [
             	'name' => "Atmos Maciel",
             	'slug' => "atmos-maciel",
             	'talk' => "Micro Frameworks: sua aplicação na crista da onda",
             	'resume' => "Nesta palestra vamos conversar sobre micro frameworks, sua estrutura e arquitetura, falar porque eles são uma boa opção para sua aplicação seja ela pequena ou grande e a facilidade que você terá um utiliza-los e aprendê-los, também vamos falar do poder que os microframworks entregam nas mãos dos desenvolvedores e das responsabilidade que vem junto com isso. Afinal com grandes poderes, vem... ah! Você já sabe o resto.",
             	'bio'    => "Desenvolvedor de sistemas (Atualmente, Sistemas Web e Mobile Android). Gosta de Inovação e seus ambientes bem como empreendedorismo. Acima de tudo, defensor e entusiasta do Software Livre, do Linux e cultura Open-Source. Gosta de aprender coisas novas e procura sempre ser multidisciplinar e interdisciplinar nas áreas do conhecimento. Estudante de Ciência da Computação, tenho objetivo de me tornar referência na minha área de atuação e promover a ciência e tecnologia. Presidente da comunidade PHP Maranhão e participante ativo das comunidades Agile MA e GDG São Luís e das demais comunidades de inovação e tecnologia do estado."
             ]
            ,1 => [
            	'name' => "Evaldo Barbosa",
            	'slug' => "evaldo-barbosa",
            	'talk' => "Por que é tão difícil um programador empreender?",
            	'resume' => "Nessa palestra veremos alguns aspectos interessantes desse tema como zona de conforto, perfil empreendedor, competências e falta de vergonha na cara.",
            	'bio'    => "Analista de sistemas, programador, palestrante e um eterno fuçador de código e problemas. Tem paixão por café e código fonte, por PHP, métodos ágeis e empreendedorismo. Scrum Master Certificado pela Scrum Alliance, embaixador do PHP-Maranhão, co-fundador do Agile-MA e membro do GDG São Luís."
            ]
            ,2 => [
            	'name' => "Fabio Soares",
            	'slug' => "fabio-soares",
            	'talk' => "A Crise do JavaScript",
            	'resume' => "Como é programar em JavaScript nos dias de hoje? Contando um pouco dos 21 anos de história do JavaScript. Sobre a situação atual e sobre o futuro dessa linguagem de programação amada por uns e odiada por outros. Dando enforque na situação atual da linguagem, sobre as novidades mais quentes do mundo da web.",
            	'bio'    => "Fabio Soares é Scrum Master, estudante de ciência da computação pela Faculdade Pitágoras. É membro ativo das comunidades PHP Maranhão e Google Developer Group São Luís. Aposta em colaborar em projetos de educação para todas as idades. Profissionalmente atua como programador no Grupo Mateus, integrado com a equipe de usabilidade e interação ao usuário."
            ]
            ,3 => [
            	'name' => "Nanderson Castro",
            	'slug' => "nanderson-castro",
            	'talk' => "JWT Com Symfony",
            	'resume' => "Nessa palestra Nanderson Castro vai mostrar como configurar nossa API com o Framework Symfony, para a utilização de JWT com mecanismo de autenticação. Abordarei conceitos básico sobre o Framework, sobre JWT e a integração entre ambos.",
            	'bio'    => "Developer por amor e curioso por natureza! Gerencia comunidades e meetups em sua região, desde PHP UG a Ionic Meetup passando pelo Google Developers Group. Zend Certified PHP Engineer, para a versão 5.5 do PHP. Acredita que promover e participar de eventos, meetups e fortalecer o network, o faz um profissional melhor e mais iterado no mercado onde atua! Profissionalmente atuo na Secretaria de Transparência e Controle do Maranhão e me aventuro, com cuidado, no mundo do empreededorismo na Code Experts Apps, empresa focada na criação de Aplicações Web e Aplicativos Móveis."
            ]
            ,4 => [
            	'name' => "Ricardo Coelho",
            	'slug' => "ricardo-coelho",
            	'talk' => "UTF-8: O último encoding que você precisará",
            	'resume' => "Nesta palestra discutiremos charsets e encodings, aprendendo as diferenças, as vantagens e desvantagens de usar cada um dos diversos disponíveis e, por fim, mostraremos porque o UTF-8 é o último encoding que você precisará usar.",
            	'bio'    => "Ricardo Coelho é cientista da computação pela Universidade Federal do Maranhão - UFMA, concentrando interesse em aplicações web com ênfase em webservices. Fundador do grupo PHP-Maranhão, que desde 2005 congrega mais de 800 profissionais do estado. Atualmente é organizer do GDG São Luis. Com mais de 20 anos de experiência profissional em desenvolvimento e docência, representa o Maranhão como palestrante em eventos no Brasil e no exterior. É vice-presidente da Associação Brasileira de Profissionais PHP - ABRAPHP, onde atua pela integração da tríade governo-mercado-academia. É especialista em em sistemas de segurança da informação, auditor certificado NBR ISO/IEC 27001 e perito forense digital."
            ]
            ,5 => [
            	'name' => "Willian Mano",
            	'slug' => "willian-mano",
            	'talk' => "Fazer software livre é fácil, difícil é manter.",
            	'resume' => "No campo das idéias sempre surgem oportunidades para a criação de algo maravilho, ainda mais se for open source. Entretanto, ao contrário do que se imagina, a parte mais difícil é a manunteção da ferramenta criada. Bugs que podem aparecer, sugestões da comunidade e melhorias próprias são apenas algumas das atividades que você deve aprender a gerenciar. Nesta palestra compartilharei um pouco da minha experiência no desenvolvimento de extenssões open source e como utilizar tecnologias para tornar sua vida de desenvolvedor mais tranquila.",
            	'bio'    => "Formado em análise e desenvolvimento de sistemas e Graduando em engenharia da computação pela UEMA, Willian trabalha atualmente como supervisor de desenvolvimento da UemaNet/UEMA. Desde 2007 atua no mercado desenvolvimento soluções de software, com foco principal em soluções WEB. Apaixonado por php, Willian possui certificação Zend PHP Certified Engineer e também é Certified Scrum Master, além de tualmente exercer a função de  vice-presidente do grupo PHP Maranhão. Suas principais áreas de interesse são: Webservices, Gameficação, Ambientes virtuais de aprendizagem e interoperabilidade de sistemas."
            ]
            ,6 => [
                'name' => "Galvão Abbott",
                'slug' => "galvao-abbott",
                'talk' => "Logs: Porque um ElePHPant tem que ter boa memória!",
                'resume' => "O que são logs, por que são importantes e como gerá-los com PHP e Monolog.",
                'bio'    => "Presidente da ABRAPHP – Associação Brasileira de Profissionais PHP;
                             Diretor da PHP Conference Brasil;
                             Contribui para a tradução da documentação oficial;
                             Atua como Zend Framework Evangelist para o ZTeam, da Zend;
                             Professor (Especialista) de Pós-Graduação UNOESC (SC) e Faculdade Alfa (PR);                                        
                             20+ anos desenvolvendo sistemas e aplicações com interface web, 15+ destes com PHP 7+ com Zend Framework                                        
                             Palestrante em eventos nacionais e internacionais;
                             Instrutor de cursos presenciais e a distância;
                             Fundador e líder do GU PHPBR;
                             Fundador e membro do GU PHPRS;"
            ]
            ,7 => [
                'name' => "Rômulo Martins",
                'slug' => "romulo-martins",
                'talk' => "Você tem uma boa ideia? Desenvolva os seus clientes antes de desenvolver a sua solução!",
                'resume' => "A palestra seguirá os conceitos abordados por Steve Blank e a metodologia “Customer Development” e explanará a importância de desenvolver os clientes antes de desenvolver a solução.",
                'bio'    => "Professor do curso de Administração da Universidade Federal do Maranhão. Programador PHP (inativo). Doutor em Informática na Educação pela UFRGS - Universidade Federal do Rio Grande do Sul. Tem mestrado em Ciência da Computação, pós-graduado em Engenharia de Sistemas e atua na gestão de equipes há 10 anos. É o fundador da Startup Infortask, ganhadora do prêmio \"Conte a sua História da Pequenas Empresas e Grandes Negócios\" na Campus Party Brasil de 2016. Atualmente é o Presidente da Startup Maranhão."
            ]
            ,8 => [
                'name' => "Alisson Gomes",
                'slug' => "alisson-gomes",
                'talk' => "Laravel Passport: API Authentication - You Have the Power.",
                'resume' => "Nesta palestra será mostrado um panorama geral com aplicações práticas do pacote de Autenticação de API's do Laravel Framework 5.3.x - Da instalação ao consumo da API no front-end.",
                'bio'    => "Cursando Bacharelado em Ciência Contábeis na Universidade Federal do Maranhão, desenvolvedor web desde 2008 e em 2009 tive meu primeiro contato com PHP, just love it! Sempre (todo dia) busco novidades em todas as tecnologias, linguagens, games, bancos de dados e tenho um vício perigoso em pc tunning e motos. Atualmente tenho um foco de desenvolvimento em sistemas web (médio e grande porte), usando, predominantemente, o framework php Laravel (dependendo do projeto uso Lumen, Slim, Silex, Phalcon ou nenhum deles - PHP7. Consumindo a API atualmente trabalho com AngularJS/2 e VueJS (typescript is love)."
            ]
            ,9 => [
                'name' => "Henrique Monteiro",
                'slug' => "henrique-monteiro",
                'talk' => "Segurança da informação e Pentest",
                'resume' => "O objetivo desta palestra é descrever as etapas de um teste de invasão, mostrando que a estrutura dos testes segue modelos cuidadosamente estruturados em passos bem definidos. Afinal, apesar das óbvias semelhanças, há uma série de diferenças entre um ataque simulado, contratado e um ataque malicioso real. Diariamente são descobertas novas falhas nos mais variados sistemas, por isso é de fundamental importância auditorias preventivas, mais especificamente, testes de invasão, que podem dar um diagnóstico real sobre a segurança dos ativos em questão.",
                'bio'    => "Webdesigner - Programador php e Entusiasta na área Hacker/Pentester."
            ]
            ,10 => [
                'name' => "Paulo Coelho",
                'slug' => "paulo-coelho",
                'talk' => "O caso da palestra sobre  interação humano-computador que parecia user experience mas escondia um título anormalmente longo",
                'resume' => "Aquele site que ninguém visita, aquele app que ninguém baixa. Estariam seus projetos amaldiçoados ou é uma simples questão de design centrado no usuário (ou a falta de)? Em 90% dos casos a mudança de foco resolve 80% dos problemas causados por 70% dos usuários.",
                'bio'    => "Paulo Coelho (o não famoso) é mestrando em design e professor de gestão do design. Acredita que sabe contar boas histórias e mente muito bem (e tem conseguido se safar com relativo sucesso). Adora animais e sonha com a paz mundial."
            ]
        );

    	return $speakerName;
	}
}
