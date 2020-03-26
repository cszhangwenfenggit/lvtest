<div {{ $attributes }}>
    <div {{ $attributes->merge(['class'=>'alert alert-'.$type, 'style' => 'color:red']) }}>
        {{ $message }}
    </div>
</div>