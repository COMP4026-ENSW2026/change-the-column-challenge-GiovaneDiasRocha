Adicionar novo pet:

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <input id="color" name="color" type="text" /> <br/>

    <label for="specie">Size</label>
    <select name="specie" id="size">

        <option value="dragao de komodo">Dragão de Komodo</option>
        <option value="mamba">Mamba</option>
        <option value="dog">Dog</option>
        <option value="bulbasauro">Bulbasauro</option>
        <option value="pikachu">Pikachu</option>
        <option value="cobra">Cobra</option>
        <option value="squirtle">Squirtle</option>
        <option value="cachorro">Cachorro</option>
        <option value="zebra">Zebra</option>
        <option value="mamba-negra">Mamba-negra</option>
        <option value="camaleao">Camaleão</option>
        <option value="cavalo">Cavalo</option>
        <option value="papagaio">Papagaio</option>
        <option value="gato">Gato</option>
        <option value="camelo">Camelo</option>
        <option value="periquito">Periquito</option>
        <option value="charmander">Charmander</option>
        <option value="bunny">Bunny</option>

    </select>

    <label for="size">Size</label>

    <select name="size" id="size">
        <option value="xs">XS</option>
        <option value="sm">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
    </select>

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
