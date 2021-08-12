@include('components.head')
<body style="background-color: rgba(0, 0, 0, 0.2);">
<header>
    <!DOCTYPE html>
    <link href="{{ URL::asset('css/welcome.css') }}" rel="stylesheet">
</header>

<main>
@include('Components.nav')
@include('Components.slider')

<!-- Section: Text -->
    <div class="container p-4">
        <section class="mb-4">
            <p>
            <h1>BEM-VINDO À BERMATOS</h1>
            Situada num local de fácil acesso e servida pelas principais vias de comunicação do grande Porto, a nossa
            empresa é das melhores e mais eficazes.<br>
            Desde logo adotamos uma linha de conduta orientada para a satisfação total e continuada do cliente, por
            forma a fidelizá-lo à empresa e à marca que representamos.<br>

            A prossecução deste objectivo assentou no princípio de que Um cliente satisfeito é o nosso melhor cartão de
            visita e um membro preponderante da família Honda; um lema que adotamos como filosofia de atuação.

            Ao longo dos anos, muitas pessoas deram-nos o privilégio de se tornarem nossas clientes, em virtude desta
            nossa linha de conduta. Desde sempre encetamos uma caminhada de aposta na atualização e de forte
            investimento na modernização e aproximação às necessidades dos clientes. <br>Os pontos fortes dos nossos
            serviços passam pela constante renovação das nossas instalações, da disponibilização do nosso cartão de
            cliente e a futura disponibilização de serviços inovadores online.
            </p>
        </section>
    </div>
    <!-- Section: Text -->
    @include('components.footer')

</main>
</body>
