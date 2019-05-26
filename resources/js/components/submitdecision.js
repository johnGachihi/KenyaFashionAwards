export function submitDecision(url, data, config) {
    return new Promise((resolve, reject) => {
        callIfFunction(config.beforeSend)._with();

        fetch(url, {
            method: 'post',
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .catch(err => {
                callIfFunction(config.onConnectionError)._with(err);
            })
            .then(data => {
                // callIfFunction(config.onComplete)._with(data);

                if(data.error !== true) {
                    callIfFunction(config.onSuccess)._with(data);
                } else {
                    callIfFunction(config.onFailure)._with(data.errorMessage)
                }
            })
    });
}

function isFunction(method) {
    return typeof method === 'function';
}


function callIfFunction(callback) {
    if(isFunction(callback)) {
        return {
            callable: callback,
            _with: param => callback(param = null)
        }
    } else {
        throw "Invalid value for " + callback.name;
    }
}

// call(callback).with(param);
