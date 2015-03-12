<div class="page-header">
    <h1>Flex container</h1>
</div>

<h2>Setting it up...</h2>
<pre>
.container {
    display: flex;
}
</pre>

<br />

<h2>Flex direction</h2>
<pre>
.container {
    flex-direction: row | row-reverse | column | column-reverse;
}
</pre>
<div class="flex">
    <p class="flex-grow">row</p>
    <p class="flex-grow">row-reverse</p>
    <p class="flex-grow">column</p>
    <p class="flex-grow">column-reverse</p>
</div>
<div class="flex">
    <div class="flex flex-grow">
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box">3</div>
    </div>
    <div class="flex flex-grow" style="flex-direction: row-reverse;">
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box">3</div>
    </div>
    <div class="flex flex-grow" style="flex-direction: column;">
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box">3</div>
    </div>
    <div class="flex flex-grow" style="flex-direction: column-reverse;">
        <div class="box">1</div>
        <div class="box">2</div>
        <div class="box">3</div>
    </div>
</div>
<br />
<p>This defines the order items are placed in within the flex container, essentially whether to extend in horizontal rows or vertical columns.</p>
