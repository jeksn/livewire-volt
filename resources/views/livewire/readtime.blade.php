<?php

// use function Livewire\Volt\{state};

?>
<div class="text-xl mt-12 bg-neutral-800 rounded px-12 py-6">
    <p class="font-normal"><span id="time" class="text-white font-bold"></span> minuters läsning</p>
</div>

<script>

function readingTime() {

const text = document.getElementById("content").innerText;
const wpm = 225;
const words = text.trim().split(/\s+/).length;
const time = Math.ceil(words / wpm);

document.getElementById("time").innerText = time;

// console.log(time);
// console.log(words);

}

readingTime();

</script>
