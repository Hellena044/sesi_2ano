<?php

echo"//menu de Segurança da Informação:
//1.objetivos da PSI
//2.escopo da política
//3.reponsabilidades
//4.boas práticas de segurança
//5.concequências do descumprimento
//6.sair\n",

$opcao = readline (" escolha uma opcao: ");

 

switch($opcao) {
    case 1:
        echo ("O objetivo da Política de Segurança da Informação é principalmente proteger a informação, isso inclui três tópicos sendo eles a Confidencialidade, a Integridade e a Disponibilidade (CIA). A confidencialidade permite que as informações sejam acessadas apenas por pessoas autorizadas; a Integridade protege as informações de serem alteradas e modificadas sem autorização; e a Disponibilidade garante que as informações estejam acessíveis sempre que necessário."), "\n";
        break;
    case 2:
        echo ("O escopo da política define quem e onde a política protege. Ela cobre: os ativos de informação que são: dados físicos ou seja (dados feitos em papel), e digitais ou seja (bancos de dados e arquivos online); Pessoas, ou seja: funcionários, prestadores de serviços, parceiros e fornecedores da política; Sistema e infraestrutura, que são: as redes, servidores, computadores e dispositivos móveis e locais físicos, ou seja: escritórios, áreas de trabalho remotos e unidades hospitalares."), "\n";
         break;
    case 3:
        echo ("As responsabilidades na Política de Segurança definem o papel e as obrigações de cada individuo da organização, na proteção dos ativos de informação contra as ameaças. Abrangência Universal: a responsabilidade não se limita à equipe de TI mas sim a todos que tem acesso aos ativos da organização. Prestação de Contas: cada usuário é responsável pelos atos praticados com suas credenciais e é responsável também pelo uso correto perante a empresa e a lei. Responsabilidade da Gestão: a alta gestão é responsável por fornecer recursos, definir a política e promover a segurança. Uso Seguro de Ativos: colaboradores são responsáveis por seguir normas de segurança."), "\n";
        break;
    case 4:
        echo ("As boas práticas de segurança da informação representam o conjunto de normas, procedimentos, comportamentos e tecnologias usados por uma organização para proteger seus dados contra acessos não autorizados, perdas ou danos. Alguns conceitos importantes das Boas Práticas são: foco na prevenção; conscientização e cultura; gestão de vulnerabilidade; conformidade e diretrizes e controle de acesso."), "\n";
        break;
    case 5:
        echo ("As consequências do descumprimento na Política de Segurança da Informação se referem à ações disciplinares, legais, financeiras e operacionais que são aplicadas a pessoas que violam as regras de proteção de dados da organização, isso pode resultar em algumas consequências como: prejuízo financeiro, danos a reputação e paralização das atividades operacionais."), "\n";
        break;
     case 6:
        echo "sair, \n";
        break;
   
    }
