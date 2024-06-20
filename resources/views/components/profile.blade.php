@props(['login'])

<div id="profile" class="mx-2">
    <a href="/">
        <img src={{ $login ? 'https://placeholder.com/30x30' : 'https://placeholder.com/20x30' }} alt="">
    </a>
</div>
