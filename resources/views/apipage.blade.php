<div>
    <h1>this is aip calling page</h1>
    {{ print_r($data->name) }}
    <ul>
        <li>
            <span>
                Name:
            </span>
            <span>
                <b>
                    {{ $data->name }}
                </b>
            </span>
        </li>
        <li>
            <span>
                Name:
            </span>
            <span>
                <b>
                    {{ $data->username }}
                </b>
            </span>
        </li>
        <li>
            <span>
                email:
            </span>
            <span>
                <b>
                    {{ $data->email }}
                </b>
            </span>
        </li>
        <li>
            <span>
                id:
            </span>
            <span>
                <b>
                    {{ $data->id }}
                </b>
            </span>
        </li>
    </ul>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>