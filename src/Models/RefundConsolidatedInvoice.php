<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * Refund consolidated invoice
 */
class RefundConsolidatedInvoice implements \JsonSerializable
{
    /**
     * @var string
     */
    private $memo;

    /**
     * @var int
     */
    private $paymentId;

    /**
     * @var string[]|string
     */
    private $segmentUids;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @var bool|null
     */
    private $applyCredit;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @param string $memo
     * @param int $paymentId
     * @param string[]|string $segmentUids
     */
    public function __construct(string $memo, int $paymentId, $segmentUids)
    {
        $this->memo = $memo;
        $this->paymentId = $paymentId;
        $this->segmentUids = $segmentUids;
    }

    /**
     * Returns Memo.
     * A description for the refund
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A description for the refund
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Payment Id.
     * The ID of the payment to be refunded
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The ID of the payment to be refunded
     *
     * @required
     * @maps payment_id
     */
    public function setPaymentId(int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Segment Uids.
     * An array of segment uids to refund or the string 'all' to indicate that all segments should be
     * refunded
     *
     * @return string[]|string
     */
    public function getSegmentUids()
    {
        return $this->segmentUids;
    }

    /**
     * Sets Segment Uids.
     * An array of segment uids to refund or the string 'all' to indicate that all segments should be
     * refunded
     *
     * @required
     * @maps segment_uids
     * @mapsBy oneOf(string[],string)
     *
     * @param string[]|string $segmentUids
     */
    public function setSegmentUids($segmentUids): void
    {
        $this->segmentUids = $segmentUids;
    }

    /**
     * Returns External.
     * Flag that marks refund as external (no money is returned to the customer). Defaults to `false`.
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     * Flag that marks refund as external (no money is returned to the customer). Defaults to `false`.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
    }

    /**
     * Returns Apply Credit.
     * If set to true, creates credit and applies it to an invoice. Defaults to `false`.
     */
    public function getApplyCredit(): ?bool
    {
        return $this->applyCredit;
    }

    /**
     * Sets Apply Credit.
     * If set to true, creates credit and applies it to an invoice. Defaults to `false`.
     *
     * @maps apply_credit
     */
    public function setApplyCredit(?bool $applyCredit): void
    {
        $this->applyCredit = $applyCredit;
    }

    /**
     * Returns Amount.
     * The amount of payment to be refunded in decimal format. Example: "10.50". This will default to the
     * full amount of the payment if not provided.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount of payment to be refunded in decimal format. Example: "10.50". This will default to the
     * full amount of the payment if not provided.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['memo']             = $this->memo;
        $json['payment_id']       = $this->paymentId;
        $json['segment_uids']     =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->segmentUids,
                'oneOf(string[],string)'
            );
        if (isset($this->external)) {
            $json['external']     = $this->external;
        }
        if (isset($this->applyCredit)) {
            $json['apply_credit'] = $this->applyCredit;
        }
        if (isset($this->amount)) {
            $json['amount']       = $this->amount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
