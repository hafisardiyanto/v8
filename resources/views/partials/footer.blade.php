<footer class="main-footer">
            {{-- To the right --}}
            {{-- <div class="float-right d-none d-sm-block">
                <b>Version</b> 8.0.0
            </div> --}}
            {{-- Default to the left --}}
            
        </footer>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form action="{{ url('/logout') }}" method="post">
                    @csrf
                    <button class="btn btn-primary" type="submit">logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
