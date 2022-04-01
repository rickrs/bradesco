<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css?v1.02">
  <title>Bradesco Open Box - Powered by Capgemini</title>
</head>
<body>
  <header class="topo">
    <div class="container">
      <div class="top">
        <a href="/">
          <img src="assets/img/logo.png" alt="">
        </a>

        <a href="#agenda" class="link">Agenda</a>
        <a href="#palestrantes" class="link">Palestrantes</a>
        <a href="#inscrevase" class="link cadastrese">Cadastre-se</a>
        <a href="#entrar" style="display: none;" class="link entrar">Entrar</a>
      </div>

      <h1>
        Porquê sabemos que damos conta <b>dos próximos desafios.</b>
      </h1>

      <img src="assets/img/headline.png" alt="" class="headline">
      
      <div class="data">
        <p>
          Nos últimos anos, a evolução da tecnologia trouxe grandes transformações para a vida de todos nós. Tudo ficou mais digital, mais instantâneo. E mudou completamente a jornada do cliente no acesso aos serviços bancários. Mas quais são os desafios que esse novo cenário apresenta para a operação e como é possível aproveitar o avanço tecnológico para criar soluções inovadoras?
        </p>
        <hr>
        <span>
          12,19 e 26 de abril <br>
          Live Broadcast
        </span>
      </div>
    </div>
  </header>

  <div class="login">
    <a href="#close" class="close">X Fechar</a>
    <div class="container">
      <form method="POST" action="assets/php/verificaemail.php" id="formEvento" name="formEvento" class="_form" >
        <!--input type="email" id="email" name="email" placeholder="Seu email" required title="Email Não pode estar em Branco ou incorreto" pattern="[^ @]*@[^ @]*"/-->
        <input type="email" name="email" id="email"
             pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="Seu email" value="<?php echo $_SESSION["email"];?>" required title="Email Não pode estar em Branco ou incorreto" required>
        <button type="submit" name="button">ENTRAR</button>
      </form>
    </div>
  </div>

  <div class="dias">
    <a href="#close" class="close">X Fechar</a>
    <div class="container">
      <div class="row dia1">
        <div class="col">
          <span>
            12/04
            <b>14h às 16h30</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 01 │ Real Time Marketing  
          </h3>

          <p>
            Entregando assuntos no instante em que o cliente procurar por eles.​
            ​<br><br>
            MKT Cloud e Interaction Studio são soluções da Salesforce para gerar respostas real time de forma omnichannel e de acordo com as 
interações dele.<br><br>
Por meio dessas aplicações é possível entregar conteúdo significativo a ele, conforme suas últimas interações, seja no mundo digital ou 
físico, de forma instantânea. Se o cliente, por exemplo, consumir conteúdo sobre financiamento imobiliário, todo o ecossistema de 
atendimento a ele, se adequa ao tema de forma real time.
<br><br>
E todas essas interações, constam na tela do gerente de conta que está na agência, pelo Financial Service Cloud. Estas ferramentas serão 
apresentadas de forma visual e interativa, através de uma jornada fictícia que ilustrará os pontos de contato e ações possíveis de serem 
realizadas para um use case a ser definido, gerando assim insights para uma experiência memorável e omnichannel, apoiada por 
tecnologia.</p>
          
          <div class="flex">
            <p>
            Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
            </p>
            <hr>
            <div class="escala">
              <p>
                <b>Escala de Abordagem</b>
              </p>
              <div class="tabela">
                <p>Business</p>
                <span>
                  <i>1</i>
                  <i>2</i>
                  <i>3</i>
                  <i>4</i>
                  <i>5</i>
                  <i>6</i>
                  <i>7</i>
                  <i>8</i>
                  <i>9</i>
                  <i class="act">10</i>
                </span>
              </div>
              <div class="tabela">
                <p>Técnica</p>
                <span>
                  <i>1</i>
                  <i>2</i>
                  <i>3</i>
                  <i>4</i>
                  <i class="act">5</i>
                  <i>6</i>
                  <i>7</i>
                  <i>8</i>
                  <i>9</i>
                  <i>10</i>
                </span>
              </div>
            </div>
          </div>

          <p>
            <b>Palestrante:</b>
            <i>Luciano Miyake</i>
            Head de Alianças para Salesforce na Capgemini
          </p>
        </div>
      </div>

      <div class="row dia2">
        <div class="col">
          <span>
            12/04
            <b>14h às 16h30</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 02 │ Insights & Data: Modernizando o estado de dados                 
          </h3>

          <p>
IDEA é a aplicação da Capgemini que potencializa um ambiente de nuvem ágil, permitindo a adoção de IA e Análise de Dados em toda a 
empresa para acelerar o valor dos negócios.<br><br> 
A aplicação é um conjunto integrado de aceleradores, estruturas, metodologias, melhores práticas e recursos de 
implementação que ajudam a modernizar, democratizar e industrializar dados. Da ingestão até a habilitação para visualização, possibilita o 
uso de modelos de Machine Learning com governança de acessos e controle de recursos usados (processamento de armazenagem).​<br><br>
Com IDEA by Capgemini, podemos observar melhores controles de custos de infraestrutura e a adoção de um modelo 
de DataOps, trazendo melhores resultados para clientes a partir da redução do time-to-market, considerando insights acionáveis.</p>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i class="act">6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i class="act">7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>
          <p>
          <b>Palestrantes</b>
            <i>Caue Moresi</i>
            Head de Insights & Data na Capgemini Brasil
            <br><br>
            <i>Bernardo Caldeira</i>
            Gerente de Soluções Digitais na Capgemini Brasil 
          </p>
        </div>
      </div>

      <div class="row dia3">
        <div class="col">
          <span>
            19/04
            <b>14h às 17h30</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 03 │ Cloud: Modernização de aplicações    
          </h3>

          <p>Criar uma propriedade de TI revitalizada para o Bradesco, acelerar a jornada de transformação de aplicações legadas para a nuvem e 
simplificar a proteção para o futuro em todo o ecossistema são fatores indispensáveis quando se trata de transformação de legado.​<br><br>
A metodologia proprietária da CAP360 é uma abordagem de revitalização comprovada, que utiliza uma plataforma para analisar códigos 
legados, componentização e prioriza com base na viabilidade, criticidade, disponibilidade de destino e benefício comercial.<br><br>
Através do CAP360 identificamos o tamanho, complexidade, intensidade de I / O, dependência e estabilidade de todos os serviços para 
revitalização e otimização legado em 4 pilares: Redução do débito técnico e otimização, Decomposição Funcional, Diagramas de Fluxo de 
Controle e Identificação de indicadores para integração e estado de transição.</p>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i class="act">2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i>7</i>
                <i class="act">8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>
          <p>
          <b>Palestrante:</b>
            <i>Ricardo Paranhos</i>
            Cloud Alliance Manager na Capgemini Brasil
            <br><br>
            <i>Vitor Marath</i>
            Líder da Prática de Cloud na Capgemini Brasil
          </p>
        </div>
      </div>

      <div class="row dia4">
        <div class="col">
          <span>
            19/04
            <b>14h às 17h30</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 04 │ Cyber Security: Confiança Zero - A jornada de um dado em um mundo em que a confiança é tudo   
          </h3>

          <p>
            Confiança é um fator-chave para as instituições financeiras há séculos. E durante todo este período, é um fator que vem se transformando junto com as próprias instituições financeiras.​
            ​<br><br>
            Hoje, no mundo digital, a confiança gira ao redor da resiliência do negócio, da conformidade e da proteção dos dados dos seus clientes. Eles são o centro de tudo e os dados são os clientes.​
            <br><br>
            A Capgemini entende que a proteção dos dados deve acompanhá-los em todo o seu ciclo de vida. Além disso, todo produto e serviço precisa ser desenvolvido e mantido tendo a cibersegurança como princípio.​
            ​<br><br>
            Na nossa abordagem, usamos a segurança como princípio em toda a jornada do dado, usando soluções baseadas no conceito de Zero Trust para definir os controles processuais e tecnológicos necessários para sua proteção.
          </p>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i class="act">5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i class="act">7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>
          <p>
          <b>Palestrante:</b>
            <i>Leonardo Carissimi</i>
            Diretor da Prática de Ciber Segurança e Privacidade na Capgemini Brasil
          </p>
        </div>
      </div>

      <div class="row dia5">
        <div class="col">
          <span>
            26/04
            <b>14h às 17h</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 05 │ Service Now: Gestão de Serviços e Operações
            <br><br>
            <i>
            Velocidade de desenvolvimento, disponibilidade de recursos e aumento de eficiência operacional
            </i>      
          </h3>

          <p>
          Por meio de fluxos de trabalho digitais, integrados aos sistemas existentes, é possível modernizar a forma de trabalho em Operações de Negócios e TI, gerenciar risco, ESG, programas e portfolio de projetos, ter controle sobre os gastos de software e ciclo de vida dos ativos (obsolescência).
          <br><br>
          Tudo isso a partir de uma interface amigável, moderna, nativa mobile e segura, onde cada usuário tem uma experiência própria, acessando rapidamente o que é mais relevante para o seu papel na organização. ServiceNow é a ponte entre pessoas e tecnologia.
          </p>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i class="act">10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i class="act">5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>
          <p>
          <b>Palestrante:</b>
            <i>Guilherme Duarte</i>
            Desenvolvimento de Negócios ServiceNow na Capgemini Brasil
            <br><br>
            <i>Erik Elias</i>
            Gerente Operações Digitais do CoE ServiceNow na Capgemini Brasil.
          </p>
        </div>
      </div>

      <div class="row dia6">
        <div class="col">
          <span>
            26/04
            <b>14h às 17h</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 06 │ Metaverso: Óculos no rosto, cabeça nas nuvens… e pés no chão​
            <br><br>
            <i>
            Metaverso é um tema que muitas empresas tem avaliado e discutido, mas será que realmente existe? 
            <br><br>
            Ou são apenas implementações isoladas de novas possibilidades de engajamento de canais digitais?
            <br><br>
            Como podemos explorar e superar juntos os desafios das novas tecnologias e plataformas, integrando as jornadas e concentrando-se em pontos de contato humanos dentro da experiência digitalizada?
            <br><br>
            O que o mercado está fazendo e quais as possibilidades reais?
            <br><br>
            Estas são algumas perguntas que abordaremos. Juntem-se a nós nestas descobertas fascinantes que as novas tecnologias estão nos trazendo.
            </i>    
          </h3>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i class="act">6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i class="act">6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>

          <p>
          <b>Palestrante:</b>
            <i>Silvio Dantas</i>
            Diretor Executivo de Inovação & Transformação Digital na Capgemini Brasil
          </p>
        </div>
      </div>

      <div class="row dia7">
        <div class="col">
          <span>
            26/04
            <b>14h às 17h</b>
          </span>
        </div>
        <div class="col">
          <h3>
            Agenda 07​ │ 5G: Potencializando novos modelos​     
          </h3>

          <p>
            Navegar nas tendências é um diferencial claro para as grandes empresas, bem como saber determinar quais tecnologias serão desenvolvidas e custeadas, em parceria ou não. Cada possibilidade deve ser profundamente examinada, ter seus componentes constituintes avaliados antes de uma tomada de decisão, considerando que cada conexão feita é vital.​
            <br><br>
            Globalmente, bancos estão colaborando para aproveitar a tecnologia 5G. Dos Estados Unidos à China, empresas trabalham para estreitar a colaboração, inovar o futuro dos pagamentos e do comércio 5G, e construir bancos inteligentes com agências inteligentes.​
            ​<br><br>
            Mas o que podemos esperar desta tecnologia? Quais são os movimentos relevantes no setor financeiro já em curso? E quais pilares suportarão a transformação que será ocasionada pelo 5G? Venha descobrir essas e outras respostas.​
          </p>

          <div class="flex">
          <p>
          Para você aproveitar da melhor forma o conteúdo do evento, elaboramos uma escala indicando nos quesitos Técnicos e Business, o quanto essa Agenda endereça aos seus desafios.
          </p>
          <hr>
          <div class="escala">
            <p>
              <b>Escala de Abordagem</b>
            </p>
            <div class="tabela">
              <p>Business</p>
              <span>
                <i>1</i>
                <i>2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i class="act">10</i>
              </span>
            </div>
            <div class="tabela">
              <p>Técnica</p>
              <span>
                <i>1</i>
                <i class="act">2</i>
                <i>3</i>
                <i>4</i>
                <i>5</i>
                <i>6</i>
                <i>7</i>
                <i>8</i>
                <i>9</i>
                <i>10</i>
              </span>
            </div>
          </div>
          </div>

          <p>
            <b>Palestrante:</b>
            <i>Silvio Dantas</i>
            Diretor de Inovação - AIE na Capgemini Brasil
            <br><br>
            <i>Vitor Mariath</i>
            Líder da Prática de Cloud na Capgemini Brasil
            </p>
        </div>
      </div>
    </div>
  </div>

  <div class="apresentador">
    <a href="#close" class="close">X Fechar</a>
    <div class="container">
      <div class="row" id="Vitor-Mariath">
        <div class="col">
          <img src="assets/img/Vitor-Mariath.png" alt="">
          <b>
            Vitor Mariath
            <i>
            Líder da Prática de Cloud na Capgemini Brasil.
            </i>
          </b>
        </div>
        <div class="col">
          <p>
          É bacharel em Sistemas de Informação pela Universidade Feevale (Novo Hamburgo-RS) e possui MBA em Negócios pela La Salle Business School, além de ter experiências internacionais em projetos de transformação de datacenter, resiliência e blockchain. 
          <br><br>Liderou projetos de infusão de práticas de SRE (Site Reliability Engineering) e de arquitetura, design e infraestrutura. Implementou plataformas AIOPS (Artificial Intelligence for IT Operations) e atuou na estratégia de implementação de diferentes nuvens, redefinindo o modelo e os processos operacionais dos clientes. Mariath soma mais de 12 anos de experiência na área. 
          
          </p>
        </div>
      </div>

      <div class="row" id="Guilherme-Duarte">
        <div class="col">
          <img src="assets/img/Guilherme-Duarte.png" alt="">
          <b>
            Guilherme de Albuquerque Duarte
            <i>
              Desenvolvimento de Negócios e Soluções em ServiceNow, Capgemini Brasil.
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Atua diretamente com os clientes na descoberta, identificação, desenvolvimento e proposição de soluções focadas na Hyperautomação e Empoderamento de processos de negócio e TI.
            <br><br>
            Desenvolveu uma carreira de Arquitetura de Soluções nos setores Financeiro, Telecomunicações, Varejo e Produtos de Consumo aconselhando executivos e suportando clientes no Brasil, Estados Unidos, França e Argentina em soluções avançadas de automação, autosserviço e integração de infra e sistemas. Graduado em Marketing, com MBA em Digital Business, apresenta um olhar de tecnologia a partir do impacto e necessidades das pessoas.
            <br><br>
            https://www.linkedin.com/in/guiduarte/ 
          </p>
        </div>
      </div>

      <div class="row" id="Bernardo-Caldeira">
        <div class="col">
          <img src="assets/img/Bernardo-Caldeira.png" alt="">
          <b>
            Bernardo Caldeira
            <i>
            Gerente de Soluções Digitais na Capgemini Brasil
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Com mais de 12 anos de atuação em consultoria de gestão e tecnologia, Bernardo tem experiência na execução de projetos de transformação e performance organizacional com ênfase em processos e metodologias como BPM, Lean e melhores práticas de gerenciamento de projetos em cascata e frameworks ágeis.
            <br><br>
            Atualmente é o responsável pelo núcleo de Business Analytics da Capgemini no Brasil, trazendo soluções em Insights & Data orientadas a desafios e dores de negócio de clientes de diferentes indústrias.
          </p>
        </div>
      </div> 

      <div class="row" id="Tharso-Vieira">
        <div class="col">
          <img src="assets/img/Tharso-Vieira.png" alt="">
          <b>
            Tharso Vieira
            <i>
              Head of Practical Innovation na Capgemini Brasil
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Tharso começou a trabalhar com publicidade digital em 97 como redator. Passou por agências e consultorias como McCann (Digital Manager), Dentsu (Digital Manager), Santa Transmedia Productions NY (Manager Director), Riot (Diretor Executivo de Criação), IBM iX Studio (Diretor de Criação/UX), TV1 (Diretor de Estratégia/Criação/UX) e Try/WPP (Diretor de Estratégia). Nesses quase 25 anos, atendeu a vários dos maiores clientes do país, como Coca-Cola, GM, Mastercard, Toyota, Sony, Santander, Nestlé, Bradesco, Postos Ipiranga, Avon, Olimpíada do Rio, GOL, Casas Bahia, Ponto Frio, Bayer, Tok&Stok e muitos outros.
          </p>
        </div>
      </div> 

      <div class="row" id="Silvio-Dantas">
        <div class="col">
          <img src="assets/img/Silvio-Dantas.png" alt="">
          <b>
            Silvio Dantas
            <i>
            Diretor Executivo de Inovação & Transformação Digital na Capgemini Brasil
            </i>
          </b>
        </div>
        <div class="col">
          <p>
          Graduado em Tecnologia pela Universidade Mackenzie, possui MBA em Gestão Estratégica e Econômica de Negócios pela FGV, sendo também certificado em Estratégia e Inovação pela MIT Sloan School of Management em Boston (EUA). Frequentou a Singularity University no Vale do Silício (EUA), sendo certificado em PMP, Agile e Design Thinking. 
            <br><br>
            Dantas trabalhou na EDS/HP e na IBM, além de ter passado pela Wipro e Volkswagen, nas quais foi Líder em digitalização e novas tecnologias. Nos últimos 2 anos, esteve de volta à IBM como Líder de Inovação até vir para a Capgemini. 
          </p>
        </div>
      </div> 

      <div class="row" id="Luciano-Miyake">
        <div class="col">
          <img src="assets/img/Luciano-Miyake.png" alt="">
          <b>
            Luciano Miyake
            <i>
            Head de Alianças para Salesforce na Capgemini
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Luciano acumula passagens pela Voxxel, T-Systems, Sintel e PwC Brasil. Vem atuando nos últimos 20 anos com soluções de vendas, marketing e serviços e liderou a estruturação das práticas de Vendas e Delivery Salesforce em duas grandes multinacionais.
          </p>
        </div>
      </div> 

      <div class="row" id="Caue-Moresi">
        <div class="col">
          <img src="assets/img/Caue-Moresi.png" alt="">
          <b>
            Caue Moresi
            <i>
              Head de Insights & Data na Capgemini Brasil.
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Com mais de 10 anos de atuação no mundo de consultoria em tecnologia, liderando equipes de Engenharia de Dados e Ciência de Dados, Caue tem experiência comprovada na execução e gestão de grandes projetos transformacionais de dados na América Latina e Europa, para diversas indústrias.<br><br> Atualmente é responsável pela prática de Insights & Data na Capgemini Brasil. Com habilidades em analytics e suas aplicações, Caue também tem como missão apoiar grandes players do mercado na integração entre as áreas de negócio e TI.
          </p>
        </div>
      </div>

      <div class="row" id="Eduardo-Paz">
        <div class="col">
          <img src="assets/img/Erick-Wilson.png" alt="">
          <b>
          Erick Elias
            <i>
            Gerente Operações Digitais do CoE ServiceNow na Capgemini Brasil 
            </i>
          </b>
        </div>
        <div class="col">
          <p>
          Líder do Cluster App Engine/ITOM para projetos ServiceNow da Capgemini Brasil. Mentor 
do projeto ServiceNow Training para a comunidade, que visa treinar, orientar e recolocar 
profissionais no mercado com mais de 100 participantes e mentor da Academia 
ServiceNow Capgemini. Atuou durante 11 anos no setor público como Oficial do Exército e 
como gestor de times ágeis no projeto dos Jogos Olímpicos Rio 2016. <br><br>
No mercado privado, atua como gestor de times ServiceNow em projetos de grande porte 
para contas estratégicas da Capgemini Brasil, possuindo mais de 4 anos de experiência na 
plataforma. Graduado em Sistemas de Informação, com MBA em Gestão Estratégica, 
possui vasta experiência em funções de liderança, atuando desde 2013 em posições de 
gestão. Possui mais de 60 certificações/acreditações na plataforma ServiceNow
          </p>
        </div>
      </div> 

      <div class="row" id="Ricardo-Paranhos">
        <div class="col">
          <img src="assets/img/Ricardo-Paranhos.png" alt="">
          <b>
            Ricardo Paranhos
            <i>
            Cloud Alliance Manager na Capgemini Brasil
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Líder de Alianças para Cloud com ampla experiência no desenvolvimento de soluções comerciais e técnicas inovadoras para clientes globais. Experiência comprovada em soluções líderes para projetos envolvendo otimização de ambiente, automação de processos, modelagem de datacenter, transformação/modernização de legado e adoção de nuvem. 
            <br><br>
            Hábil na negociação de contratos e implementação das melhores práticas funcionais e técnicas em conformidade com os requisitos do cliente. Especialista em fornecer liderança e orientação eficazes para equipes para melhoria contínua de processos e desempenho
          </p>
        </div>
      </div> 

      <div class="row" id="Leonardo-Carissimi">
        <div class="col">
          <img src="assets/img/Leonardo-Carissimi.png" alt="">
          <b>
            Leonardo Carissimi
            <i>
            Diretor da Prática de Ciber Segurança e Privacidade na Capgemini Brasil
            </i>
          </b>
        </div>
        <div class="col">
          <p>
            Leonardo possui bacharelado e mestrado em Ciências da Computação pela Universidade Federal do Rio Grande do Sul e MBA em Finanças Corporativas pelo IBMEC. Ainda detém algumas das principais certificações internacionais do mercado de cibersegurança incluindo CISSP (Certified Information Systems Security Professional) e Auditor Líder da ISO 27001. 
            <br><br>
            Profissional com mais de 25 anos dedicados a este mercado, já atuou em diferentes posições em empresas nacionais e multinacionais de prestação de serviços de Tecnologia e cibersegurança.
          </p>
        </div>
      </div> 

    </div>
  </div>

  <div class="formulario">
    <a href="#close" class="close">X Fechar</a>
    <div class="container">
      <div class="row">
        <div class="col">
          <p>
            <b style="font-weight: bold;">Embarque com a gente nesta jornada de aceleração da inovação.</b>

            Você pode escolher participar de quantas Agendas quiser. Assinale no formulário ao lado as que são do seu interesse e complete o cadastro para receber o link do evento.
          </p>

          <img src="assets/img/line.png" alt="">
          <span>
            12,19 e 26 de abril <br>
            Live Broadcast
          </span>
          <br><br>
          <p style="font-size: 10px;">
            <strong style="color:#37B3E4">12/04 14h às 16h30</strong>
            <br><br>
            <strong>Agenda 01</strong>
            <br>
            Real Time Marketing <br>
            
            <br><br>
            <strong>Agenda 02:</strong>
            <br>
            Insights & Data: Modernizando o estado de dados <br>
            IDEA
          </p>

          <p style="font-size: 10px;">
            <strong style="color:#37B3E4">19/04 14h às 17h30</strong>
            <br><br>
            <strong>Agenda 03:</strong>
            <br>
            Cloud: Maximização dos benefícios ao negócio <br>
            Com Cap360
            <br><br>
            <strong>Agenda 04:</strong>
            <br>
            Cyber Security: Confiança Zero - A jornada de um dado em um mundo em que a confiança é tudo
            <br><br>
            <strong>Agenda 05:</strong>
            <br>
            Hyperautomação e Empoderamento: Uma abordagem Low/NoCode <br>
            
          </p>

          <p style="font-size: 10px;">
            <strong style="color:#37B3E4">26/04 14h às 17h</strong>
            <br><br>
            <strong>Agenda 06:</strong>
            <br>
            Metaverso: Óculos no rosto, cabeça nas nuvens… e pés no chão
            <br><br>
            <strong>Agenda 07:</strong>
            <br>
            5G: Potencializando novos modelos
          </p>
        </div>

        <div class="col">
          <iframe src="https://go.capgeminigroup.com/l/95412/2022-03-11/629ft9" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="hellobar">
    <div class="btns">
      <a href="#cadastrese" class="cadastrese">Cadastre-se</a>
      <a href="#agenda">Conheça a Agenda</a>
    </div>
  </div>

  <section class="agenda" id="agenda">
    <div class="container">
      <h1>Melhorando a competitividade e a personalização do atendimento</h1>
      <p>
        As possibilidades que a transformação digital representa são fundamentais para habilitar o negócio e enfrentar as mudanças do mercado e os novos modelos de negócio. Além de oferecer para o cliente soluções mais personalizadas com segurança e escalabilidade. Neste evento, vamos mostrar como Cloud, Data & Analytics, 5G, Cyber Security e Metaverso podem contribuir na entrega e sustentação da inovação.
      </p>
      <br><br>

      <h2>
      Apoio
      </h2>
      <img style="width: 100%; max-width: 450px; margin: 20px 0 40px;" src="assets/img/logos-apoiadores.png" alt="">

      <h2>Agenda</h2>
      <div class="row">
        <div class="col">
          <span>
            12/04
            <b>14h às 16h30</b>
          </span>
          <div class="tracks">
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 01 │ Real Time Marketing</b>
                </i>
                Como antecipar as necessidades dos clientes de forma Omnichannel.
                <a href="#vermais" id="dia1">Ver Mais</a>
              </p>
            </div>
            <hr>
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 02 │ Insights & Data: Modernizando o estado de dados</b>
                   <br>
                  IDEA
                </i>
                Conheça nossos cases, metodologias e ferramenta para preconizar um framework de engenharia de dados.
                <a href="#vermais" id="dia2">Ver Mais</a>
              </p>
            </div>
          </div>
        </div>
        <hr>
        <div class="col">
          <span>
            19/04
            <b>14h às 17h30</b>
          </span>
          <div class="tracks">
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 03 │ Cloud: Maximização dos benefícios ao negócio</b>
                  <br>
                  Cap360
                </i>
                Acelerando a jornada de transformação de aplicações legadas para a nuvem
                <a href="#vermais" id="dia3">Ver Mais</a>
              </p>
            </div>
            <hr>
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 04 │ Cyber Security: Confiança Zero - A jornada de um dado em um mundo em que a confiança é tudo</b>
                </i>
                Segurança e proteção de dados durante todo o ciclo de vida do cliente. 
                <a href="#vermais" id="dia4">Ver Mais</a>
              </p>
            </div>
          </div>          
        </div>
        <hr>
        <div class="col">
          <div class="tracks">
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 05 │ Hyperautomação e Empoderamento: Uma abordagem Low/NoCode</b>
                </i>
                Integrando operações e sistemas para colocar as pessoas no centro de tudo.
                <a href="#vermais" id="dia5">Ver Mais</a>
              </p>
            </div>
          </div>
        </div>
        <hr>
        <div class="col">
          <span>
            26/04
            <b>14h às 17h</b>
          </span>
          <div class="tracks">
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 06 │ Metaverso: Óculos no rosto, cabeça nas nuvens… e pés no chão</b>
                </i>
                Entenda o que é o Metaverso e quais são as possibilidades de considera-lo como um novo canal digital
                <a href="#vermais" id="dia6">Ver Mais</a>
              </p>
            </div>
            <hr>
            <div class="track-col">
              <p>
                <i>
                  <b style="color: #37B3E4;">Agenda 07 │ 5G: Potencializando novos modelos</b>
                </i>
                Descubra como o 5G pode habilitar novos modelos de negócio.
                <a href="#vermais" id="dia7">Ver Mais</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="palestrantes" id="palestrantes">
    <div class="container">
      <h3>Palestrantes</h3>
      <div class="row">
        <div class="col">
          <img src="assets/img/Bernardo-Caldeira.png" alt="">
          <span>
            <b>Bernardo Caldeira</b>
            Gerente de Soluções Digitais na Capgemini Brasil
          </span>
          <hr>
          <p>
            Com mais de 12 anos de atuação em consultoria de gestão e tecnologia, Bernardo tem experiência na execução de projetos de transformação e performance organizacional com ênfase em…
          </p>
          <a href="#vermais" class="Bernardo-Caldeira">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Caue-Moresi.png" alt="">
          <span>
            <b>Caue Moresi</b>
            Head de Insights & Data na Capgemini Brasil
          </span>
          <hr>
          <p>
            Com mais de 10 anos de atuação no mundo de consultoria em tecnologia, liderando equipes de Engenharia de Dados e Ciência de Dados, Caue tem…
          </p>
          <a href="#vermais" class="Caue-Moresi">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Erick-Wilson.png" alt="">
          <span>
            <b>Erick Elias</b>
            Gerente Operações Digitais do CoE ServiceNow na Capgemini Brasil
          </span>
          <hr>
          <p>
          Líder do Cluster App Engine/ITOM para projetos ServiceNow da Capgemini Brasil. Mentor do projeto ServiceNow Training para a comunidade...
          </p>
          <a href="#vermais" class="Eduardo-Paz">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Guilherme-Duarte.png" alt="">
          <span>
            <b>Guilherme Duarte</b>
            Desenvolvimento de Negócios ServiceNow na Capgemini Brasil
          </span>
          <hr>
          <p>
            Atua diretamente com os clientes na descoberta, identificação, desenvolvimento e proposição de soluções focadas na Hyperautomação e Empoderamento…
          </p>
          <a href="#vermais" class="Guilherme-Duarte">Ver mais</a>
        </div>
      </div>

      <div class="row">
      <div class="col">
          <img src="assets/img/Leonardo-Carissimi.png" alt="">
          <span>
            <b>Leonardo Carissimi</b>
            Diretor da Prática de Ciber Segurança e Privacidade na Capgemini Brasil
          </span>
          <hr>
          <p>
            Leonardo possui bacharelado e mestrado em Ciências da Computação pela Universidade Federal do Rio Grande do Sul e MBA em Finanças…
          </p>
          <a href="#vermais" class="Leonardo-Carissimi">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Luciano-Miyake.png" alt="">
          <span>
            <b>Luciano Miyake</b>
            Head de Alianças para Salesforce na Capgemini
          </span>
          <hr>
          <p>
            Luciano acumula passagens pela Voxxel, T-Systems, Sintel e PwC Brasil. Vem atuando nos últimos 20 anos com soluções de vendas, marketing e serviços e liderou…
          </p>
          <a href="#vermais" class="Luciano-Miyake">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Ricardo-Paranhos.png" alt="">
          <span>
            <b>Ricardo Paranhos</b>
            Cloud Alliance Manager na Capgemini Brasil
          </span>
          <hr>
          <p>
            Líder de Alianças para Cloud com ampla experiência no desenvolvimento de soluções comerciais e técnicas inovadoras para clientes globais…
          </p>
          <a href="#vermais" class="Ricardo-Paranhos">Ver mais</a>
        </div>

        <div class="col">
          <img src="assets/img/Silvio-Dantas.png" alt="">
          <span>
            <b>Silvio Dantas</b>
            Diretor Executivo de Inovação & Transformação Digital na Capgemini Brasil
          </span>
          <hr>
          <p>
            Silvio Dantas é graduado em Tecnologia pela Universidade Mackenzie, possui MBA em Gestão Estratégica e Econômica de Negócios pela FGV. É Certificado…
          </p>
          <a href="#vermais" class="Silvio-Dantas">Ver mais</a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="assets/img/Vitor-Mariath.png" alt="">
          <span>
            <b>Vitor Mariath</b>
            Líder da Prática de Cloud na Capgemini Brasil.
          </span>
          <hr>
          <p>
            Vitor Mariath é bacharel em Sistemas de Informação pela Universidade Feevale (Novo Hamburgo-RS), possui MBA em Negócios pela La Salle Business School e experiências…
          </p>
          <a href="#vermais" class="Vitor-Mariath">Ver mais</a>
        </div>
        
        <div class="col" style="opacity: 0;">
          <span>
          </span>
          <p>
          </p>
        </div>
        <div class="col" style="opacity: 0;">
          <span>
          </span>
          <p>
          </p>
        </div>
        <div class="col" style="opacity: 0;">
          <span>
          </span>
          <p>
          </p>
        </div>
      </div>
    </div>
  </section>

  <footer class="rodape">
    <div class="container">
      <h3>
      APOIO
      </h3>
      <img src="assets/img/logos-apoiadores.png" alt="">

      <p>
        Todos os direitos reservados para a Capgemini. Copyright © 2022
      </p>
    </div>
  </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $(".cadastrese").click(function(){
      $(".formulario").toggleClass("act");
    });
    $(".entrar").click(function(){
      $(".login").toggleClass("act");
    });

    $(".Vitor-Mariath").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Vitor-Mariath").toggleClass("act");
    });

    $(".Guilherme-Duarte").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Guilherme-Duarte").toggleClass("act");
    });
    $(".Bernardo-Caldeira").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Bernardo-Caldeira").toggleClass("act");
    });
    $(".Tharso-Vieira").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Tharso-Vieira").toggleClass("act");
    });

    $(".Silvio-Dantas").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Silvio-Dantas").toggleClass("act");
    });
    $(".Luciano-Miyake").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Luciano-Miyake").toggleClass("act");
    });
    $(".Caue-Moresi").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Caue-Moresi").toggleClass("act");
    });
    $(".Patrick-Cardoso").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Patrick-Cardoso").toggleClass("act");
    });

    $(".Eduardo-Paz").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Eduardo-Paz").toggleClass("act");
    });
    $(".Ricardo-Paranhos").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Ricardo-Paranhos").toggleClass("act");
    });
    $(".Leonardo-Carissimi").click(function(){
      $(".apresentador").toggleClass("act");
      $("#Leonardo-Carissimi").toggleClass("act");
    });

    $("#dia1").click(function(){
      $(".dias").toggleClass("act");
      $(".dia1").toggleClass("act");
    });
    $("#dia2").click(function(){
      $(".dias").toggleClass("act");
      $(".dia2").toggleClass("act");
    });
    $("#dia3").click(function(){
      $(".dias").toggleClass("act");
      $(".dia3").toggleClass("act");
    });
    $("#dia4").click(function(){
      $(".dias").toggleClass("act");
      $(".dia4").toggleClass("act");
    });
    $("#dia5").click(function(){
      $(".dias").toggleClass("act");
      $(".dia5").toggleClass("act");
    });
    $("#dia6").click(function(){
      $(".dias").toggleClass("act");
      $(".dia6").toggleClass("act");
    });
    $("#dia7").click(function(){
      $(".dias").toggleClass("act");
      $(".dia7").toggleClass("act");
    });

    $(".close").click(function(){
      $(".formulario").removeClass("act");
      $(".apresentador").removeClass("act");
      $(".apresentador div").removeClass("act");
      $(".login").removeClass("act");
      $(".dias").removeClass("act");
      $(".dias div").removeClass("act");
    });

  });
  </script>
</body>
</html>