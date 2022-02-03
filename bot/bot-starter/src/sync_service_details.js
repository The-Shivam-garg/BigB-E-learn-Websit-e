const Twilio = require('twilio');
require('dotenv').config();

function syncServiceDetails() {
    const syncServiceSid = process.env.TWILIO_SYNC_SERVICE_SID || 'default';

    const client = new Twilio(
        process.env.TWILIO_API_KEY,
        process.env.TWILIO_API_SECRET,
        {accountSid: process.env.TWILIO_ACCOUNT_SID}
    );
    client.sync
        .services(syncServiceSid)
        .fetch()
        .then(response => {
            console.log(response);
        })
        .catch(error => {
            console.log(error);
        });
    
}

module.exports = syncServiceDetails;