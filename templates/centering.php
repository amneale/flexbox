<style>
.flex {
    display: flex;
    justify-content: space-between;
}

.item {
    align-self: center;
}
</style>

<div class="page-header">
    <h1>Practical applications</h1>
    <h2>Vertical centering</h2>
</div>

<pre>
.container {
    display: flex;
    justify-content: space-between;
}

.item {
    align-self: center;
}
</pre>

<p>Vertically centering elements has long been a problematic process, usually ending in using some nasty combination of positioning or just using tables. With flexbox, however, vertical alignment is trivial, and independent of sibling elements.</p>
<br />
<div class="flex" style="background: #ccc; height: 300px;">
    <div class="box">1</div>
    <textarea class="box item" style="height: 50px; width: 250px; max-height: 300px; line-height: 1em; color: #fff;">This box is centered!</textarea>
    <div class="box" style="align-self: flex-end;">3</div>
</div>

<br />
<p>With flexbox we can easily center items horizontally and vertically, even if we are unsure what their widths and heights will be.</p>