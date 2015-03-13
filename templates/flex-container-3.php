<div class="page-header">
    <h1>Flex container (continued)</h1>
</div>

<h2>Flex justify content</h2>
<pre>
.container {
    justify-content: flex-start | flex-end | center | space-between | space-around;
}
</pre>
<p>Like text justify, this defines the alignment of child items along the main axis</p>
<p>flex-start</p>
<div class="flex">
    <div class="box fixed-box">1</div>
    <div class="box fixed-box">2</div>
    <div class="box fixed-box">3</div>
</div>
<br />
<p>flex-end</p>
<div class="flex" style="justify-content: flex-end;">
    <div class="box fixed-box">1</div>
    <div class="box fixed-box">2</div>
    <div class="box fixed-box">3</div>
</div>
<br />
<p>center</p>
<div class="flex" style="justify-content: center;">
    <div class="box fixed-box">1</div>
    <div class="box fixed-box">2</div>
    <div class="box fixed-box">3</div>
</div>
<br />
<p>space-between</p>
<div class="flex" style="justify-content: space-between;">
    <div class="box fixed-box">1</div>
    <div class="box fixed-box">2</div>
    <div class="box fixed-box">3</div>
</div>
<br />
<p>space-around</p>
<div class="flex" style="justify-content: space-around;">
    <div class="box fixed-box">1</div>
    <div class="box fixed-box">2</div>
    <div class="box fixed-box">3</div>
</div>

<br /><br />
<h2>Flex align items</h2>
<pre>
.container {
    align-items: flex-start | flex-end | center | stretch | baseline;
}
</pre>
<p>Alignment defines the layout of items along the cross-axis (perpendicular to the main axis)</p>
<div class="flex">
    <p class="flex-grow">flex-start</p>
    <p class="flex-grow">flex-end</p>
    <p class="flex-grow">center</p>
    <p class="flex-grow">stretch</p>
    <p class="flex-grow">baseline</p>
</div>
<div class="flex">
    <div class="flex flex-grow" style="align-items: flex-start;">
        <div class="box" style="height: auto;">1</div>
        <div class="box" style="height: auto;">2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: flex-end;">
        <div class="box" style="height: auto;">1</div>
        <div class="box" style="height: auto;">2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: center;">
        <div class="box" style="height: auto;">1</div>
        <div class="box" style="height: auto;">2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: stretch;">
        <div class="box" style="height: auto;">1</div>
        <div class="box" style="height: auto;">2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
    <div class="flex flex-grow" style="align-items: baseline;">
        <div class="box" style="height: auto; line-height: 70px;">1</div>
        <div class="box" style="height: auto; line-height: 30px;">2<br />2</div>
        <div class="box" style="height: auto;">3</div>
    </div>
</div>
