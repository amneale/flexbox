<div class="page-header">
    <h1>Flex container (continued)</h1>
</div>

<h2>Flex align</h2>
<pre>
.container {
    align-items: flex-start | flex-end | center | stretch | baseline;
}
</pre>
<p>Like text justify, this defines alignment along the main axis (horizontal or vertical)</p>
<p>flex-start</p>
<div class="flex" style="align-items: flex-start;">
    <div class="box" style="height: auto;">1</div>
    <div class="box" style="height: auto;">2<br />2</div>
    <div class="box" style="height: auto;">3</div>
</div>
<br />
<p>flex-end</p>
<div class="flex" style="align-items: flex-end;">
    <div class="box" style="height: auto;">1</div>
    <div class="box" style="height: auto;">2<br />2</div>
    <div class="box" style="height: auto;">3</div>
</div>
<br />
<p>center</p>
<div class="flex" style="align-items: center;">
    <div class="box" style="height: auto;">1</div>
    <div class="box" style="height: auto;">2<br />2</div>
    <div class="box" style="height: auto;">3</div>
</div>
<br />
<p>stretch</p>
<div class="flex" style="align-items: stretch;">
    <div class="box" style="height: auto;">1</div>
    <div class="box" style="height: auto;">2<br />2</div>
    <div class="box" style="height: auto;">3</div>
</div>
<br />
<p>baseline</p>
<div class="flex" style="align-items: baseline;">
    <div class="box" style="height: auto; line-height: 70px;">1</div>
    <div class="box" style="height: auto; line-height: 30px;">2<br />2</div>
    <div class="box" style="height: auto;">3</div>
</div>
<br />