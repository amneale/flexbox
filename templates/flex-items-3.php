<div class="page-header">
    <h1>Flex items (continued)</h1>
</div>

<h2>Flex align self</h2>
<pre>
.item {
    align-self: auto | flex-start | flex-end | center | stretch;
}
</pre>
<br />
<p>It's possible to override the align-items property from the container, on a per-item basis.</p>
<br />

<div class="flex">
    <p class="flex-grow">auto</p>
    <p class="flex-grow">flex-start</p>
    <p class="flex-grow">flex-end</p>
    <p class="flex-grow">center</p>
    <p class="flex-grow">stretch</p>
</div>

<div class="flex">
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto; align-self: auto;">1</div>
        <div class="box" style="height: auto;">2<br />2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto; align-self: flex-start;">1</div>
        <div class="box" style="height: auto;">2<br />2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto; align-self: flex-end;">1</div>
        <div class="box" style="height: auto;">2<br />2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto; align-self: center;">1</div>
        <div class="box" style="height: auto;">2<br />2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto; align-self: stretch;">1</div>
        <div class="box" style="height: auto;">2<br />2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
</div>
<br />
<br />
<p>The auto value will inherit the container's align-items property, or stretch if it has no parent container</p>