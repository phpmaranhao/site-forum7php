<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhoController{
    /**
     * @var Application
     */
    private $app;

    private $speakerName = array(
         0  => "daniela-pitta"
        ,1  => "helena-saminez"
        ,2  => "galvao-abbott"
        ,3  => "bruno-porkaria"
        ,4  => "atmos-maciel"
        ,5  => "evaldo-barbosa"
        ,6  => "fabio-soares"
        ,7  => "nanderson-castro"
        ,8  => "ricardo-coelho"
        ,9  => "willian-mano"
        ,10 => "romulo-martins"
        ,11 => "allisson-gomes"
        ,12 => "henrique-monteiro"
        ,13 => "paulo-coelho");

    public function __construct($app){
        $this->app = $app;
    }

    public function speaker_A(){
        $content                     = array();
        $content['name']             = "Atmos Maciel";
        $content['photo']            = false;
        $content['photo_speaker']    = "atmos-maciel.jpg";
        $content['description']      = "Desenvolvedor de sistemas (Atualmente, Sistemas Web e Mobile Android). Gosta de Inovação e seus ambientes bem como empreendedorismo. Acima de tudo, defensor e entusiasta do Software Livre, do Linux e cultura Open-Source. Gosta de aprender coisas novas e procura sempre ser multidisciplinar e interdisciplinar nas áreas do conhecimento. Estudante de Ciência da Computação, tenho objetivo de me tornar referência na minha área de atuação e promover a ciência e tecnologia. Presidente da comunidade PHP Maranhão e participante ativo das comunidades Agile MA e GDG São Luís e das demais comunidades de inovação e tecnologia do estado.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Micro Frameworks: sua aplicação na crista da onda";
        $content['slideDescription'] = "Nesta palestra vamos conversar sobre micro frameworks, sua estrutura e arquitetura, falar porque eles são uma boa opção para sua aplicação seja ela pequena ou grande e a facilidade que você terá um utiliza-los e aprendê-los, também vamos falar do poder que os microframworks entregam nas mãos dos desenvolvedores e das responsabilidade que vem junto com isso. Afinal com grandes poderes, vem... ah! Você já sabe o resto.";
        $content['slideLink']        = "http://speakerdeck.com/atmos/slide";
        $content['urlName']          = $this->speakerName[4];
        $content['socialNetWork']    = array(
                                        'facebook'  => "https://www.facebook.com/atmosmps",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "https://www.instagram.com/atm0smacie1",
                                        'linkedIn'  => "https://www.linkedin.com/in/atmosmaciel",
                                        'github'    => "https://github.com/atmosmaciel"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_B(){
        $content                     = array();
        $content['name']             = "Evaldo Barbosa";
        $content['photo']            = false;
        $content['photo_speaker']    = "evaldo-barbosa.jpg";
        $content['description']      = "Analista de sistemas, programador, palestrante e um eterno fuçador de código e problemas. Tem paixão por café e código fonte, por PHP, métodos ágeis e empreendedorismo. Scrum Master Certificado pela Scrum Alliance, embaixador do PHP-Maranhão, co-fundador do Agile-MA e membro do GDG São Luís.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Por que é tão difícil um programador empreender?";
        $content['slideDescription'] = "Nessa palestra veremos alguns aspectos interessantes desse tema como zona de conforto, perfil empreendedor, competências e falta de vergonha na cara.";
        $content['slideLink']        = "http://speakerdeck.com/evaldo/slide";
        $content['urlName']          = $this->speakerName[5];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "http://instagram.com/",
                                        'linkedIn'  => "http://linkedin.com/",
                                        'github'    => "http://github.com"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_C(){
        $content                     = array();
        $content['name']             = "Fabio Soares";
        $content['photo']            = "fabio-soares.jpg";
        $content['photo_speaker']    = "fabio-soares.jpg";
        $content['description']      = "Fabio Soares é Scrum Master, estudante de ciência da computação pela Faculdade Pitágoras. É membro ativo das comunidades PHP Maranhão e Google Developer Group São Luís. Aposta em colaborar em projetos de educação para todas as idades. Profissionalmente atua como programador no Grupo Mateus, integrado com a equipe de usabilidade e interação ao usuário.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "javascript.gif";
        $content['slideName']        = "A Crise do JavaScript";
        $content['slideDescription'] = "Como é programar em JavaScript nos dias de hoje? Contando um pouco dos 21 anos de história do JavaScript. Sobre a situação atual e sobre o futuro dessa linguagem de programação amada por uns e odiada por outros. Dando enforque na situação atual da linguagem, sobre as novidades mais quentes do mundo da web.";
        $content['slideLink']        = "https://speakerdeck.com/1fabiosoares";
        $content['urlName']          = $this->speakerName[6];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/1FabioSoares",
                                        'twitter'   => "http://twitter.com/1fabiosoares",
                                        'instagram' => "http://instagram.com/1fabiosoares",
                                        'linkedIn'  => "https://br.linkedin.com/in/fabio-soares-531205125",
                                        'github'    => "http://github.com/1fabiosoares"
                                        
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_D(){
        $content                     = array();
        $content['name']             = "Nanderson Castro";
        $content['photo']            = false;
        $content['photo_speaker']    = "nanderson-castro.jpg";
        $content['photo']            = "/speakers/nanderson-castro.jpg";
        $content['description']      = "Developer por amor e curioso por natureza. Gerencia comunidades e meetups em sua região, desde PHP UG a Ionic Meetup passando pelo Google Developers Group. Zend Certified PHP Engineer, acredita que promover e participar de eventos, meetups e fortalecer o network o faz um profissional melhor e mais inteirado sobre o mercado onde atua. Profissionalmente, atua na Secretaria de Transparência e Controle do Maranhão e se aventura no mundo do empreededorismo através da Code Experts Apps, empresa focada na criação de Aplicações Web e Aplicativos Móveis.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "JWT Com Symfony";
        $content['slideDescription'] = "Nessa palestra Nanderson Castro vai mostrar como configurar nossa API com o Framework Symfony, para a utilização de JWT com mecanismo de autenticação. Abordarei conceitos básico sobre o Framework, sobre JWT e a integração entre ambos.";
        $content['slideLink']        = "http://speakerdeck.com/nanderson/slide";
        $content['urlName']          = $this->speakerName[7];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "http://instagram.com/",
                                        'linkedIn'  => "http://linkedin.com/",
                                        'github'    => "http://github.com"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_E(){
        $content                     = array();
        $content['name']             = "Ricardo Coelho";
        $content['photo']            = false;
        $content['photo_speaker']    = "ricardo-coelho.jpg";
        $content['photo']            = "/speakers/ricardo-coelho.jpg";
        $content['description']      = "Ricardo Coelho é cientista da computação pela Universidade Federal do Maranhão - UFMA, concentrando interesse em aplicações web com ênfase em webservices. Fundador do grupo PHP-Maranhão, que desde 2005 congrega mais de 800 profissionais do estado. Atualmente é organizer do GDG São Luis. Com mais de 20 anos de experiência profissional em desenvolvimento e docência, é Zend Certified PHP Engineer e representa o Maranhão como palestrante em eventos no Brasil e no exterior. É vice-presidente da Associação Brasileira de Profissionais PHP - ABRAPHP, onde atua pela integração da tríade governo-mercado-academia. É especialista em em sistemas de segurança da informação, auditor certificado NBR ISO/IEC 27001 e perito forense digital.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "UTF-8: O último encoding que você precisará";
        $content['slideDescription'] = "Nesta palestra discutiremos charsets e encodings, aprendendo as diferenças, as vantagens e desvantagens de usar cada um dos diversos disponíveis e, por fim, mostraremos porque o UTF-8 é o último encoding que você precisará usar.";
        $content['slideLink']        = "https://speakerdeck.com/ramcoelho";
        $content['urlName']          = $this->speakerName[8];
        $content['socialNetWork']    = array(
                                        'facebook'  => "https://facebook.com/ricardoamcoelho",
                                        'twitter'   => "https://twitter.com/ramcoelho",
                                        'instagram' => "https://instagram.com/ramcoelho",
                                        'linkedIn'  => "https://www.linkedin.com/in/ramcoelho",
                                        'github'    => "https://github.com/ramcoelho"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_F(){
        $content                     = array();
        $content['name']             = "Willian Mano";
        $content['photo']            = false;
        $content['photo_speaker']    = "willian-mano.jpg";
        $content['description']      = "Formado em análise e desenvolvimento de sistemas e Graduando em engenharia da computação pela UEMA, Willian trabalha atualmente como supervisor de desenvolvimento da UemaNet/UEMA. Desde 2007 atua no mercado desenvolvimento soluções de software, com foco principal em soluções WEB. Apaixonado por php, Willian possui certificação Zend PHP Certified Engineer e também é Certified Scrum Master, além de tualmente exercer a função de  vice-presidente do grupo PHP Maranhão. Suas principais áreas de interesse são: Webservices, Gameficação, Ambientes virtuais de aprendizagem e interoperabilidade de sistemas.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "slide-willian-mano.png";
        $content['slideName']        = "Fazer software livre é fácil, difícil é manter.";
        $content['slideDescription'] = "No campo das idéias sempre surgem oportunidades para a criação de algo maravilho, ainda mais se for open source. Entretanto, ao contrário do que se imagina, a parte mais difícil é a manunteção da ferramenta criada. Bugs que podem aparecer, sugestões da comunidade e melhorias próprias são apenas algumas das atividades que você deve aprender a gerenciar. Nesta palestra compartilharei um pouco da minha experiência no desenvolvimento de extenssões open source e como utilizar tecnologias para tornar sua vida de desenvolvedor mais tranquila. ";
        $content['slideLink']        = "https://speakerdeck.com/willianmano";
        $content['urlName']          = $this->speakerName[9];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/willianmano",
                                        'twitter'   => "http://twitter.com/willian_dev",
                                        'instagram' => "http://instagram.com/willian_mano",
                                        'linkedIn'  => "https://br.linkedin.com/in/willianmano",
                                        'github'    => "http://github.com/willianmano"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_G(){
        $content                     = array();
        $content['name']             = "Daniela Pitta";
        $content['photo']            = false;
        $content['photo_speaker']    = "daniela-pitta.jpg";
        $content['description']      = "Daniela é formada em Sistemas para Internet pelo IFPB e atua como Desenvolvedora Web nas principais linguagens de programação Javascript e Ruby. Tem interesse pelas áreas de Teste, Qualidade, Gerência de Projetos e Engenharia de Software por isso, lê bastante sobre os temas. Coordena duas comunidades de desenvolvimento em João Pessoa, o Jampa Ruby e o Women Techmakers João Pessoa. É #MulherTechSimSenhor e no seu tempo livre gosta de ler, escrever e criar novos projetos.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Criando seu primeiro componente em Angular 2";
        $content['slideDescription'] = "Bastante coisa mudou da versão 1.0 do Angular para a versão 2.0 e nessa palestra espero apresentar como o Angular 2 opera através da criação de um primeiro componente. Essa palestra tem o objetivo de apresentar o funcionamento geral do framework e dos conceitos aplicados por ele. Não será necessário conhecimento prévio do Angular 1.0 pois como irei apresentar, as coisas funcionam de forma bem diferente no Angular 2.0.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[0];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_H(){
        $content                     = array();
        $content['name']             = "Helena Saminez";
        $content['photo']            = false;
        $content['photo_speaker']    = "helena-saminez.jpg";
        $content['description']      = "Estudante do curso de Computação, líder do Women Techmakers, integrante do grupo PHP Women Brasil, ama impulsionar e empoderar mulheres da área de tecnologia e trabalhar em comunidades.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "O Poder das comunidades de Tecnologia";
        $content['slideDescription'] = "Será um compartilhamento de experiências, envolvimento de comunidades. Contar sobre o início das comunidades e o poder que ela possui, haverá também uma \"pausa para a comunidade\" para compartilhar ideia, falar sobre a experiência em comunidade.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[1];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_I(){
        $content                     = array();
        $content['name']             = "Galvão Abbott";
        $content['photo']            = false;
        $content['photo_speaker']    = "galvao-abbott.png";
        $content['description']      = "Presidente da ABRAPHP – Associação Brasileira de Profissionais PHP;
                                        Diretor da PHP Conference Brasil;
                                        Contribui para a tradução da documentação oficial;
                                        Atua como Zend Framework Evangelist para o ZTeam, da Zend;
                                        Professor (Especialista) de Pós-Graduação UNOESC (SC) e Faculdade Alfa (PR);
                                        
                                        20+ anos desenvolvendo sistemas e aplicações com interface web, 15+ destes com PHP 7+ com Zend Framework
                                        
                                        Palestrante em eventos nacionais e internacionais;
                                        Instrutor de cursos presenciais e a distância;
                                        Fundador e líder do GU PHPBR;
                                        Fundador e membro do GU PHPRS;";

        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Logs: Porque um ElePHPant tem que ter boa memória!";
        $content['slideDescription'] = "O que são logs, por que são importantes e como gerá-los com PHP e Monolog.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[2];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_J(){
        $content                     = array();
        $content['name']             = "Bruno Porkaria";
        $content['photo']            = false;
        $content['photo_speaker']    = "../img.png";
        $content['description']      = "A Definir...";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "A Definir...";
        $content['slideDescription'] = "A Definir...";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[3];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_L(){
        $content                     = array();
        $content['name']             = "Rômulo Martins";
        $content['photo']            = false;
        $content['photo_speaker']    = "romulo-martins.jpg";
        $content['description']      = "Professor do curso de Administração da Universidade Federal do Maranhão. Programador PHP (inativo). Doutor em Informática na Educação pela UFRGS - Universidade Federal do Rio Grande do Sul. Tem mestrado em Ciência da Computação, pós-graduado em Engenharia de Sistemas e atua na gestão de equipes há 10 anos. É o fundador da Startup Infortask, ganhadora do prêmio \"Conte a sua História da Pequenas Empresas e Grandes Negócios\" na Campus Party Brasil de 2016. Atualmente é o Presidente da Startup Maranhão.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Você tem uma boa ideia? Desenvolva os seus clientes antes de desenvolver a sua solução!";
        $content['slideDescription'] = "A palestra seguirá os conceitos abordados por Steve Blank e a metodologia “Customer Development” e explanará a importância de desenvolver os clientes antes de desenvolver a solução.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[10];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_M(){
        $content                     = array();
        $content['name']             = "Alisson Gomes";
        $content['photo']            = false;
        $content['photo_speaker']    = "alisson-gomes.jpg";
        $content['description']      = "Cursando Bacharelado em Ciência Contábeis na Universidade Federal do Maranhão, desenvolvedor web desde 2008 e em 2009 tive meu primeiro contato com PHP, just love it! Sempre (todo dia) busco novidades em todas as tecnologias, linguagens, games, bancos de dados e tenho um vício perigoso em pc tunning e motos. Atualmente tenho um foco de desenvolvimento em sistemas web (médio e grande porte), usando, predominantemente, o framework php Laravel (dependendo do projeto uso Lumen, Slim, Silex, Phalcon ou nenhum deles - PHP7. Consumindo a API atualmente trabalho com AngularJS/2 e VueJS (typescript is love).";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Laravel Passport: API Authentication - You Have the Power.";
        $content['slideDescription'] = "Nesta palestra será mostrado um panorama geral com aplicações práticas do pacote de Autenticação de API's do Laravel Framework 5.3.x - Da instalação ao consumo da API no front-end.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[11];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_N(){
        $content                     = array();
        $content['name']             = "Henrique Monteiro";
        $content['photo']            = false;
        $content['photo_speaker']    = "henrique-monteiro.jpg";
        $content['description']      = "Webdesigner - Programador php e Entusiasta na área Hacker/Pentester.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Segurança da informação e Pentest";
        $content['slideDescription'] = "O objetivo desta palestra é descrever as etapas de um teste de invasão, mostrando que a estrutura dos testes segue modelos cuidadosamente estruturados em passos bem definidos. Afinal, apesar das óbvias semelhanças, há uma série de diferenças entre um ataque simulado, contratado e um ataque malicioso real. Diariamente são descobertas novas falhas nos mais variados sistemas, por isso é de fundamental importância auditorias preventivas, mais especificamente, testes de invasão, que podem dar um diagnóstico real sobre a segurança dos ativos em questão.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[12];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_O(){
        $content                     = array();
        $content['name']             = "Paulo Coelho";
        $content['photo']            = false;
        $content['photo_speaker']    = "paulo-coelho.jpg";
        $content['description']      = "Paulo Coelho (o não famoso) é mestrando em design e professor de gestão do design. Acredita que sabe contar boas histórias e mente muito bem (e tem conseguido se safar com relativo sucesso). Adora animais e sonha com a paz mundial.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "O caso da palestra sobre  interação humano-computador que parecia user experience mas escondia um título anormalmente longo";
        $content['slideDescription'] = "Aquele site que ninguém visita, aquele app que ninguém baixa. Estariam seus projetos amaldiçoados ou é uma simples questão de design centrado no usuário (ou a falta de)? Em 90% dos casos a mudança de foco resolve 80% dos problemas causados por 70% dos usuários.";
        $content['slideLink']        = "https://speakerdeck.com/";
        $content['urlName']          = $this->speakerName[13];
        $content['socialNetWork']    = array(
            'facebook'  => "http://facebook.com/",
            'twitter'   => "http://twitter.com/",
            'instagram' => "http://instagram.com/",
            'linkedIn'  => "https://br.linkedin.com/in/",
            'github'    => "http://github.com/"
        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }
}
