@props(['title', 'action'])

<button type="button" class="btn btn-primary waves-effect waves-light mb-3" data-bs-toggle="modal"
    data-bs-target="#formModal">Tambah</button>

<!-- sample modal content -->
<div id="formModal" class="modal fade" tabindex="-1" aria-labelledby="formModalLabel" data-bs-scroll="true"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $action }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
