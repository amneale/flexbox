<div class="page-header">
    <h1>Flex items</h1>
</div>
<p>Properties applied to child items defines how they are ordered and resized within the container</p>

<h2>Ordering</h2>
<pre>
.item {
    order: &lt;integer&gt;;
}
</pre>
<br />
<div class="flex" style="justify-content: space-around; width: 30%;">
    <div class="box" style="order: 10">1</div>
    <div class="box" style="order: -1">2</div>
    <div class="box">3</div>
    <div class="box">4</div>
    <div class="box" style="order: -2">5</div>
</div>
<br />
<p>Assigning an order to child items will override the order in the source code. It should be noted that as in the above example, any nth-child styles will still respect the order in the DOM</p>

<br />
<h2>Flex grow</h2>
<pre>
.item {
    flex-grow: &lt;number&gt;;
}
</pre>
<br />
<div class="flex" style="justify-content: space-around;">
    <div class="box" style="flex-grow: 1">1</div>
    <div class="box" style="flex-grow: 2">2</div>
    <div class="box" style="flex-grow: 3">3</div>
    <div class="box" style="flex-grow: 2">4</div>
    <div class="box" style="flex-grow: 1">5</div>
</div>
<br />
<p>Flex grow allows items to grow to fill space, it is relative: an item with flex-grow: 2 will grow twice as much as one with flex-grow: 1</p>

<br />
<h2>Flex shrink</h2>
<pre>
.item {
    flex-shrink: &lt;number&gt;;
}
</pre>
<br />
<div class="flex" style="justify-content: space-around;">
    <div class="box" style="flex-shrink: 2; width: 200px;">1</div>
    <div class="box" style="flex-shrink: 1; width: 200px;">2</div>
    <div class="box" style="flex-shrink: 0; width: 200px;">3</div>
    <div class="box" style="flex-shrink: 1; width: 200px;">4</div>
    <div class="box" style="flex-shrink: 2; width: 200px;">5</div>
</div>
<br />
<p>The opposite of flex grow, this defines if items will shrink, and how much by. Unlike flex grow which defaults to 0, items in a flex container will shrink by default</p>