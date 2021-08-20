<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Contact Address Component</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="contact_address" class="col-md-4 control-label">Contact Address</label>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-xs addAddress">+ Add Address</button>
                                <textarea name="contact_address" id="contact_address" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('contactAddressComponent mounted.')
        }
    }
</script>