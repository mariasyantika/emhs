<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul" type="text" class="form-control" placeholder="Masukan Judul">

        </div>
        <div class="form-group">
            <textarea wire:model="deskripsi" cols="30" rows="10" class="form-control" placeholder="Masukan Deskripsi"></textarea>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
