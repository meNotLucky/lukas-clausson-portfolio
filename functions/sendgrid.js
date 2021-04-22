const client = require("@sendgrid/mail")

function sendEmail(client, message, senderSubject = "Portfolio Contact", senderEmail, senderName) {
    return new Promise((fulfill, reject) => {
        const data = {
            from: {
                email: senderEmail,
                name: senderName
            },
            subject: senderSubject,
            to: 'contact@lukasclausson.com',
            html: message
        }

        client
            .send(data)
            .then(([response, body]) => {
                fulfill(response)
            })
            .catch(error => reject(error))
    })
}

exports.handler = function(event, context, callback) {
    const {
        SENDGRID_API_KEY,
        SENDGRID_SENDER_EMAIL,
        SENDGRID_SENDER_NAME
    } = process.env

    const body = JSON.parse(event.body)
    const message = body.message
    const subject = body.subject

    client.setApiKey(SENDGRID_API_KEY)

    sendEmail(
        client,
        message,
        subject,
        SENDGRID_SENDER_EMAIL,
        SENDGRID_SENDER_NAME
    )
    .then(response => callback(null, { statusCode: response.statusCode }))
    .catch(err => callback(err, null))
}