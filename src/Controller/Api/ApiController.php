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
             	'talk' => "A definir",
             	'resume' => "Ainda não epecificado...",
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
            	'talk' => "A definir",
            	'resume' => "A definir",
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
            	'talk' => "PHP & Templates SVG - Documentos instantâneos",
            	'resume' => "Nesta palestra veremos como utilizar templates SVG para geração de documentos instantâneos em PHP, com suporte a imagens, texto variável, gráficos e múltiplas páginas. Diga adeus à biblioteca de geração de PDFs que sempre trouxe alegria e paz para o seu dia a dia #sqn.",
            	'bio'    => "Ricardo Coelho é cientista da computação pela Universidade Federal do Maranhão - UFMA, concentrando interesse em aplicações web com ênfase em webservices. Fundador do grupo PHP-Maranhão, que desde 2005 congrega mais de 800 profissionais do estado. Atualmente é organizer do GDG São Luis. Com mais de 20 anos de experiência profissional em desenvolvimento e docência, representa o Maranhão como palestrante em eventos no Brasil e no exterior. É vice-presidente da Associação Brasileira de Profissionais PHP - ABRAPHP, onde atua pela integração da tríade governo-mercado-academia. É especialista em em sistemas de segurança da informação, auditor certificado NBR ISO/IEC 27001 e perito forense digital."
            ]
            ,5 => [
            	'name' => "Willian Mano",
            	'slug' =>  "willian-mano",
            	'talk' => "Fazer software livre é fácil, difícil é manter.",
            	'resume' => "No campo das idéias sempre surgem oportunidades para a criação de algo maravilho, ainda mais se for open source. Entretanto, ao contrário do que se imagina, a parte mais difícil é a manunteção da ferramenta criada. Bugs que podem aparecer, sugestões da comunidade e melhorias próprias são apenas algumas das atividades que você deve aprender a gerenciar. Nesta palestra compartilharei um pouco da minha experiência no desenvolvimento de extenssões open source e como utilizar tecnologias para tornar sua vida de desenvolvedor mais tranquila.",
            	'bio'    => "Formado em análise e desenvolvimento de sistemas e Graduando em engenharia da computação pela UEMA, Willian trabalha atualmente como supervisor de desenvolvimento da UemaNet/UEMA. Desde 2007 atua no mercado desenvolvimento soluções de software, com foco principal em soluções WEB. Apaixonado por php, Willian possui certificação Zend PHP Certified Engineer e também é Certified Scrum Master, além de tualmente exercer a função de  vice-presidente do grupo PHP Maranhão. Suas principais áreas de interesse são: Webservices, Gameficação, Ambientes virtuais de aprendizagem e interoperabilidade de sistemas."
            ]
        );

    	return $speakerName;
	}
}
