<template>
    <div>
        <p>Test</p>
        <draggable>
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </draggable>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default {
        components:{
            draggable
        }
    }
</script>