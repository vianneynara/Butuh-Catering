@props(['login'])

<button id="profile" class="mx-2">
    <img src={{ $login ? 'https://placeholder.com/30x30' : 'https://placeholder.com/20x30' }} alt="">
</button>
