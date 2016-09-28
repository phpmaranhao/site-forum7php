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
        ,"william-mano"
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
        $content['photo_speaker']    = false;
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
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
        $content['photo_speaker']    = false;
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
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
        $content['description']      = "Fabio Soares é estudante de ciência da computação pela Faculdade Pitágoras. É membro ativo das comunidades PHP Maranhão e Google Developer Group São Luís. Aposta em colaborar em projetos de educação para todas as idades. Profissionalmente atua como programador no Grupo Mateus, integrado com a equipe de usabilidade e interação ao usuário.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
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
        $content['name']             = "William Mano";
        $content['photo']            = false;
        $content['photo_speaker']    = false;
        $content['description']      = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Praesent id enim justo. Ut lacinia rutrum ex, a aliquam enim dignissim at. Curabitur ut orci sit amet arcu cursus accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet tortor justo. Duis feugiat tristique arcu, vel semper lectus fermentum facilisis. Sed ac magna a ipsum ornare pulvinar.";
        $content['type']             = "Palestra";
        $content['slidePhoto']       = "rocket-night.jpg";
        $content['slideName']        = "Foguetes e a Nasa";
        $content['slideDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis quam nec dui faucibus, et dapibus erat volutpat.";
        $content['slideLink']        = "https://speakerdeck.com/mano";
        $content['urlName']          = $this->speakerName[4];
        $content['socialNetWork']    = array(
                                        'facebook'  => "http://facebook.com/",
                                        'twitter'   => "http://twitter.com/",
                                        'instagram' => "http://instagram.com/",
                                        'linkedIn'  => "http://linkedin.com/",
                                        'github'    => "http://github.com"
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
