<script>
    function cancel_re(id) {
        if(confirm('ต้องการยกเลิกจากจองใช้หรือไม่')){
            
        }
    }

    function convert(str) {
        var date = new Date(str),
            mnth = ("0" + (date.getMonth() + 1)).slice(-2),
            day = ("0" + date.getDate()).slice(-2);
        return [date.getFullYear(), mnth, day].join("-");
    }
</script>
<div class="modal fade" id="reserve_table" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form-reserve" action="javascript:void(0)" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">จองโต๊ะใหม่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_cm" value="<?php echo $ID; ?>" required>
                    <div class="form-group">
                        <label class="form-control-label">เลือกโต๊ะที่จะนั่ง</label>
                        <select class="form-control" name="id_tb" required>
                            <option value="">กรุณาเลือกโต๊ะ</option>
                            <?php foreach (Database::query("SELECT * FROM `service_table` WHERE status_tb='0'", PDO::FETCH_OBJ) as $row) : ?>
                                <option value="<?php echo $row->id_tb; ?>"><?php echo $row->zone_tb . "" . $row->no_tb; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">จำนวนคนทั้งหมด</label>
                        <select class="form-control" name="people_sum" required>
                            <option value="">กรุณาจำนวนคน</option>
                            <?php for ($i = 1; $i <= 4; $i++) : ?>
                                <option value="<?php echo $i ?>"><?php echo $i; ?> คน</option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">เลือกวันที่จอง</label>
                        <input id="dataStarts" type="date" name="date_re" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">เลือกเวลาที่เข้าร้าน</label>
                        <input id="timeStart" type="time" name="timeStart_re" value="16:00" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">เวลาที่ร้านกำหนด (ประมาณ) </label>
                        <input id="timeEnd" disabled type="time" name="timeEnd_re" value="18:00" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">จองโต๊ะ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#form-reserve").submit(function() {
        var inputs = $("#form-reserve :input");
        var values = {};
        inputs.each(function() {
            values[this.name] = $(this).val();
        });

        // var TimeStart = new Date(values['date_re'] + ' ' + values['timeStart_re']);
        // var timeEnd = new Date(TimeStart)

        // timeEnd.setMinutes(TimeStart.getMinutes() - 30);

        // var sd = "" + timeEnd.getMinutes();
        // var sNews = sd.length == 1 ? "0" + sd : sd;
        // values['timeEnd_re'] = TimeStart.getHours() + ":" + sNews;

        console.log(values);

        $.ajax({
            url: "./controller/reserve_cl.php",
            type: "POST",
            data: {
                key: "form-reserve",
                data: values
            },
            success: function(result, statusText, jqXHR) {
                console.log(result);
                if (result == 'success') {
                    alert('จองโต๊ะสำเร็จ');
                    // $('#form-reserve').trigger("reset");
                    location.reload(true);
                } else {
                    alert("มีลูกค้าจองโต๊ะล่วงหน้าแล้ว");
                }
            },
            error: function(jqXHR, statusText) {
                alert('จองโต๊ะไม่สำเร็จ กรุณาลองใหม่อีกครั้ง')
            }
        });
    });
    Date.prototype.addHours = function(h) {
        this.setTime(this.getTime() + (h * 60 * 60 * 1000));
        return this;
    }

    $("#timeStart").change(function() {
        // alert($(this).val())
        var timeStart = $(this).val();
        var dateTimeStart = new Date($("#dataStarts").val() + ' ' + timeStart);
        var gHS = dateTimeStart.getHours();
        var gMS = dateTimeStart.getMinutes();


        var timeEnd_add = new Date(dateTimeStart);
        timeEnd_add.setMinutes(dateTimeStart.getMinutes() + 100);
        // alert(timeEnd_add);


        var datetimeAdd = new Date($("#dataStarts").val() + ' ' + $(this).val()).addHours(2);
        // alert(gH);
        var s = "" + gMS;
        var sNew = s.length == 1 ? "0" + s : s;

        var sd = "" + timeEnd_add.getMinutes();
        var sNews = sd.length == 1 ? "0" + sd : sd;
        if (gHS >= 16 && gHS <= 21) {

            // $("#timeEnd").val(datetimeAdd.getHours() + ":" + sNew);

            $("#timeEnd").val(timeEnd_add.getHours() + ":" + sNews);
        } else if (gHS == 22) {
            $("#timeEnd").val('23:59');
        } else {
            alert("กรุณาเลือกเวลา 16:00 - 22:59")
            $(this).val("16:00");
            $("#timeEnd").val('18:00');
        }

    });

    $("#timeEnd").change(function() {
        // var ve = $(this).val();

        // var dateTimeEnd = new Date($("#dataStarts").val() + ' ' + ve);

        // var gHS = dateTimeEnd.getHours();
        // var gMS = dateTimeEnd.getMinutes();

        // if (gHS >= 17 && gHS <= 23) {

        // } else {
        //     alert("กรุณาเลือกเวลาออกจากร้าน 17:00 - 23:59")
        //     $(this).val("23:59");
        // }
    })


    $(document).ready(function() {
        $("#dataStarts").val(convert(new Date()));

    })
</script>