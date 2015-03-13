<div class="page-header">
    <h1>Flex items (continued)</h1>
</div>

<h2>Flex basis</h2>
<pre>
.item {
    flex-basis: &lt;length&gt; | auto;
}
</pre>
<p>Flex basis defines the size of the element before the remaining space is distributed.</p>
<br />
<p>All space distributed (flex-basis: 0)</p>
<div class="flex" style="justify-content: space-around;">
    <div class="box flex-grow" style="width: auto; flex-basis: 0;">short</div>
    <div class="box flex-grow" style="width: auto; flex-basis: 0;">loooooooooooooooooooooooong</div>
    <div class="box flex-grow" style="width: auto; flex-basis: 0;">short</div>
</div>
<br />
<p>'Extra' space distributed (flex-basis: auto)</p>
<div class="flex">
    <div class="box flex-grow" style="width: auto; flex-basis: auto;">short</div>
    <div class="box flex-grow" style="width: auto; flex-basis: auto;">loooooooooooooooooooooooong</div>
    <div class="box flex-grow" style="width: auto; flex-basis: auto;">short</div>
</div>
<br />
<p>Arbitrary space distributed (flex-basis: 200px / 0 / 200px)</p>
<div class="flex">
    <div class="box flex-grow" style="width: auto; flex-basis: 200px;">short</div>
    <div class="box flex-grow" style="width: auto; flex-basis: 0">loooooooooooooooooooooooong</div>
    <div class="box flex-grow" style="width: auto; flex-basis: 200px;">short</div>
</div>
<br />