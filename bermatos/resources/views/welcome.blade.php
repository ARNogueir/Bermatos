<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="description" content="">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <title>Bem vindo à Bermatos</title>
</head>
<body>
<main>
    @include('components.nav')
    @include('components.slider')
    <h1 style="text-align: center">
        <span class="bemwelc">BEM-VINDO <br>À<br></span> <span class="berwelc">BER</span><span
            class="mawelc">MA</span><span
            class="twelc">T</span><span
            class="oswelc">OS</span>
    </h1>
    <div class="container p-4">

        <br>
        <hr>
        Situada num local de fácil acesso e servida pelas principais vias de comunicação do grande Porto, a nossa
        empresa é das melhores e mais eficazes.<br>
        Desde logo adotamos uma linha de conduta orientada para a satisfação total e continuada do cliente, por
        forma a fidelizá-lo à empresa e à marca que representamos.<br>

        A prossecução deste objectivo assentou no princípio de que Um cliente satisfeito é o nosso melhor cartão de
        visita, um lema que adotamos como filosofia de atuação.

        Ao longo dos anos, muitas pessoas deram-nos o privilégio de se tornarem nossas clientes, em virtude desta
        nossa linha de conduta. Desde sempre encetamos uma caminhada de aposta na atualização e de forte
        investimento na modernização e aproximação às necessidades dos clientes. <br>Os pontos fortes dos nossos
        serviços passam pela constante renovação das nossas instalações, da disponibilização do nosso cartão de
        cliente e a futura disponibilização de serviços inovadores online.
        </section>
    </div>
    @include('components.footer')

</main>
</body>
