<div style="margin: 0 auto;
text-align: center;" dir="rtl">
    <h3>مرحبا، {{ $name }}</h3>
    <p style="  padding-bottom: 15px;">{{ $details }}</p>
    <a href="{{ route('project', $project) }}" style="border: 1px solid;
    padding: 10px 35px;
    margin: 18px;
    background-color: #61f2f2;
    text-decoration: none;
    font-weight: bolder;
    border-radius: 15px;
    color: darkblue;border-color: #61f2f2">المشروع</a>
    <br><br>
    <hr style="margin-top:25px;">
</div>
