<div class="page-header">
    <h1>Flex container (continued)</h1>
</div>

<h2>Flex wrap</h2>
<pre>
.container {
    flex-wrap: nowrap | wrap | wrap-reverse;
}
</pre>
<p>By default flex items will try to fit onto one line. Wrapping can be controlled with this property and the flex-direction to control the axis of stacking</p>
<p>nowrap</p>
<div class="flex">
    <div class="box wide">1</div>
    <div class="box wide">2</div>
    <div class="box wide">3</div>
    <div class="box wide">4</div>
    <div class="box wide">5</div>
    <div class="box wide">6</div>
    <div class="box wide">7</div>
    <div class="box wide">8</div>
</div>
<br />
<p>wrap</p>
<div class="flex" style="flex-wrap: wrap;">
    <div class="box wide">1</div>
    <div class="box wide">2</div>
    <div class="box wide">3</div>
    <div class="box wide">4</div>
    <div class="box wide">5</div>
    <div class="box wide">6</div>
    <div class="box wide">7</div>
    <div class="box wide">8</div>
</div>
<br />
<p>wrap-reverse</p>
<div class="flex" style="flex-wrap: wrap-reverse;">
    <div class="box wide">1</div>
    <div class="box wide">2</div>
    <div class="box wide">3</div>
    <div class="box wide">4</div>
    <div class="box wide">5</div>
    <div class="box wide">6</div>
    <div class="box wide">7</div>
    <div class="box wide">8</div>
</div>