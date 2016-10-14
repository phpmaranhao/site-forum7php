<?php

namespace ForumPHPMA\Controller;

use Silex\Application;

class WhoController{
    /**
     * @var Application
     */
    private $app;

    private $speakerName = array(
         "atmos-maciel"
        ,"evaldo-barbosa"
        ,"fabio-Soares"
        ,"nanderson-castro"
        ,"ricardo-coelho"
        ,"willian-mano"
        ,"speaker_G"
        ,"speaker_H"
        ,"speaker_I"
        ,"speaker_J"
        ,"speaker_L"
        ,"speaker_M"
        ,"speaker_N"
        ,"speaker_O"
        ,"speaker_P"
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
        $content['urlName']          = $this->speakerName[0];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "http://instagram.com/",
                                        'linkedIn'  => "http://linkedin.com/",
                                        'github'    => "http://github.com"
                                        );

        return $this->app['twig']->render('/who/speaker.twig', $content);
    }

    public function speaker_B(){
        $content                     = array();
        $content['name']             = "Evaldo Barbosa";
        $content['photo']            = false;
        $content['photo_speaker']    = "evaldo-barbosa.jpg";
        $content['description']      = "Analista de sistemas, programador, palestrante e um eterno fuçador de código e problemas. Tem paixão por café e código fonte, por PHP, métodos ágeis e empreendedorismo.
Scrum Master Certificado pela Scrum Alliance, embaixador do PHP-Maranhão, co-fundador do Agile-MA e membro do GDG São Luís.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Por que é tão difícil um programador empreender?";
        $content['slideDescription'] = "Nessa palestra veremos alguns aspectos interessantes desse tema como zona de conforto, perfil empreendedor, competências e falta de vergonha na cara.";
        $content['slideLink']        = "http://speakerdeck.com/evaldo/slide";
        $content['urlName']          = $this->speakerName[1];
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
        $content['urlName']          = $this->speakerName[2];
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
        $content['urlName']          = $this->speakerName[3];
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
        $content['urlName']          = $this->speakerName[3];
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
        $content['urlName']          = $this->speakerName[4];
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
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_H(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_I(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_J(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_L(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_M(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_N(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_O(){
        return "Sem View Para este Palestrante ainda";
    }

    public function speaker_P(){
        return "Sem View Para este Palestrante ainda";
    }
}
