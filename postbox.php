<style>
    #postmeta-table tbody td {
        border-bottom: 1px solid gray;
    }

</style>


<table class="widefat fixed" id="postmeta-table">

    <thead>
        <tr>
            <th colspan="2"><h1>Post Meta</h1></th>

        </tr>
        <tr>
            <th><strong>Key</strong></th>
            <td><strong>Value</strong></td>
        </tr>
    </thead>

    <tbody>

	<?php foreach ( $meta as $key => $value ) : ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value[0]; ?></td>
        </tr>
	<?php endforeach; ?>
    </tbody>
</table>


