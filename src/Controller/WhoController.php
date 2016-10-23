<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhoController{
    /**
     * @var Application
     */
    private $app;

    private $speakerName = array(
         "daniela-pitta"
        ,"helena-saminez"
        ,"galvao-abbott"
        ,"bruno-porkaria"
        ,"atmos-maciel"
        ,"evaldo-barbosa"
        ,"fabio-soares"
        ,"nanderson-castro"
        ,"ricardo-coelho"
        ,"willian-mano"
        ,"romulo-martins"
    );

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
        $content['slideName']        = "A definir";
        $content['slideDescription'] = "Ainda não especificado...";
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
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "A Definir";
        $content['slideDescription'] = "Ainda não especificado...";
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
        $content['description']      = "Developer por amor e curioso por natureza! Gerencia comunidades e meetups em sua região, desde PHP UG a Ionic Meetup passando pelo Google Developers Group. Zend Certified PHP Engineer, para a versão 5.5 do PHP. Acredita que promover e participar de eventos, meetups e fortalecer o network, o faz um profissional melhor e mais iterado no mercado onde atua! Profissionalmente atuo na Secretaria de Transparência e Controle do Maranhão e me aventuro, com cuidado, no mundo do empreededorismo na Code Experts Apps, empresa focada na criação de Aplicações Web e Aplicativos Móveis.";
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
        $content['description']      = "Ricardo Coelho é cientista da computação pela Universidade Federal do Maranhão - UFMA, concentrando interesse em aplicações web com ênfase em webservices. Fundador do grupo PHP-Maranhão, que desde 2005 congrega mais de 800 profissionais do estado. Atualmente é organizer do GDG São Luis. Com mais de 20 anos de experiência profissional em desenvolvimento e docência, representa o Maranhão como palestrante em eventos no Brasil e no exterior. É vice-presidente da Associação Brasileira de Profissionais PHP - ABRAPHP, onde atua pela integração da tríade governo-mercado-academia. É especialista em em sistemas de segurança da informação, auditor certificado NBR ISO/IEC 27001 e perito forense digital.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "PHP & Templates SVG - Documentos instantâneos";
        $content['slideDescription'] = "Nesta palestra veremos como utilizar templates SVG para geração de documentos instantâneos em PHP, com suporte a imagens, texto variável, gráficos e múltiplas páginas. Diga adeus à biblioteca de geração de PDFs que sempre trouxe alegria e paz para o seu dia a dia #sqn.";
        $content['slideLink']        = "https://speakerdeck.com/ramcoelho";
        $content['urlName']          = $this->speakerName[8];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "http://instagram.com/",
                                        'linkedIn'  => "http://linkedin.com/",
                                        'github'    => "http://github.com"
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
        $content['photo_speaker']    = "../img.png";
        $content['description']      = "Sou estudante  de Computação, líder do Women Techmakers, integrante  do Php Women Brasil, ama impulsionar e  emponderar mulheres para a área de tecnologia, e ama trabalhar em comunidades.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "O Poder das comunidades de Tecnologia";
        $content['slideDescription'] = "A Definir...";
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
        $content['photo_speaker']    = "../img.png";
        $content['description']      = "A Definir...";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "A Definir...";
        $content['slideDescription'] = "A Definir...";
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
}
