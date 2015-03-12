<div class="page-header">
    <h1>Flex container (continued)</h1>
</div>

<h2>Flex justify</h2>
<pre>
.container {
    justify-content: flex-start | flex-end | center | space-between | space-around;
}

</pre>
<p>Like text justify, this defines alignment along the main axis (horizontal or vertical)</p>
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